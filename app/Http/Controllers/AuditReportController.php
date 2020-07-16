<?php

namespace App\Http\Controllers;

use App\Audit;
use App\Certificate;
use App\Company;
use App\Question;
use App\Report;
use Dompdf\Adapter\PDFLib;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class AuditReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auditor');
    }

    public function auditorDashboard(){
        $data =array();
        $data['audits']=Report::all()->count();
        $data['companies']=Company::all()->count();
        $data['questions']=Question::all()->count();
        $data['certificaes']=Certificate::all()->count();
        $data['results']=Certificate::all();
        return view('back.pages.auditorDashboard',$data);
    }




    public function auditReport(){
        $data= array();
        $data['companies']= DB::table('companies')->where('status',1)->get();
        $data['certificates']= DB::table('certificates')->where('status',1)->get();
        $data['questions']= DB::table('questions')->where('stage',1)->paginate(20);
       // return view('back.pages.auditReport.report',$data);
        return view('back.pages.auditReport.demoReportInsert',$data);
    }

   public function makeReport($id, $stage){
       $data= array();
       $data['certificates']= $id;
       $data['stage']= $stage;
       $data['questions']= DB::table('questions')->where('stage',$stage)->where('certificate_id', $id)->paginate(20);
       //return view('back.pages.auditReport.demoReportInsert',$data);
       return view('back.pages.auditReport.company',$data);
       //print_r($data);

   }

   public function auditquestion($id, $stage, $com){
    $data = array();
    $data['company']= $com;
    $data['certificate']= $id;
    $data['stage']= $stage;
    $data['questions']= DB::table('questions')->where('stage',$stage)->where('certificate_id', $id)->paginate(20);
    return view('back.pages.auditReport.demoReportInsert',$data);
   }

   public function changesummary($certificate, $stage, $company){
       $data = array();
       $data['certificate']= $certificate;
       $data['stage']=$stage;
       $data['company']=$company;

    //    print_r($data);
        return view('back.pages.auditReport.changesummary',$data);
   // return Redirect::to('/dashboard/auditquestion/'.$certificate.'/'.$stage.'/'.$company);
   }

  

   public function insertchangesummary(Request $request){
       $data= array();
       $certificate =$data['certificate_id'] =$request->certificate_id;
       $stage       =$data['stage'] = $request->stage;
       $company     =$data['company_id'] = $request->company_id;

       $data['quoted_man']= $request->quoted_man;
       $data['employee_detail']= $request->employee_detail;
       $data['change_scope']= $request->change_scope;
       $data['additional_information']= $request->additional_information;

       DB::table('changes')->insert($data);

       $data2 = array();
       $data2['certificate_id']= $certificate;
       $data2['stage']=    $stage;
       $data2['company_id']= $company ;
       $data2['improvement_area']=json_encode($request->improvement_area);
       $data2['nonconformatise']=$request->nonconformatise;
       $data2['declaration']=json_encode($request->declaration);
       $data2['recommendation']=" ";
       $data2['sign_off_date']=$request->sign_off_date;
       $data2['auditorName']=$request->auditorName;
       $data2['clientName']=$request->clientName;
       $data2['clidentDesignation']=$request->clidentDesignation;
       DB::table('summaries')->insert($data2);

        return Redirect::to('/dashboard/auditquestion/'.$certificate.'/'.$stage.'/'.$company);


   }

   public function updateChange(Request $request, $id){
    $data = array();
    $data['quoted_man']= $request->quoted_man;
    $data['employee_detail']= $request->employee_detail;
    $data['change_scope']= $request->change_scope;
    $data['additional_information']= $request->additional_information;

    DB::table('changes')->where('id',$id)->update($data);
    Session::flash('message','Update Successfull!!!');
    return redirect()->route('auditorDashboard');



   }

    public function insertReport(Request $request){

        $validatedData = $request->validate([
            'company_id' => 'required',
            'certificate_id' => 'required',
            'stage' => 'required',
        ]);
        $time=time(); 
        $data= array();
        $company=$data['company_id']= $request->company_id;
        $certificate=$data['certificate_id']= $request->certificate_id;
        $stage=$data['stage']= $request->stage;
        $data['question_id']= json_encode($request->question_id );
        $data['status_id']= json_encode($request->status_id);
        $data['evidence_id']=json_encode($request->evidence_id);
        $data['description']=json_encode( $request->description);
        $data['status']= 0;
        $data['created_by']= Auth::guard('admin')->user()->id;
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $query = DB::table('reports')->insert($data);
        if($query){
            Session::flash('message','Report Submitted Successfull!!!');
             return redirect()->route('auditorDashboard');
            //return Redirect::to('/dashboard/changesummary/'.$certificate.'/'.$stage.'/'.$company);
        }
    }

    public function viewReport(){

        $data = array();
        $data['results']=Report::paginate(20);
        return view('back.pages.auditReport.auditReportView',$data);
        //return $data;
    }

    public function viewReportDetails($id){
        $data = array();
        $data['questions']=Question::all();
        $data['result']=Report::where('id', $id)->first();
     
      //  $pdf = PDF::loadView('back.pages.auditReport.viewReportDetails', $data);
    // return $pdf->download('report.pdf');
       
   return view('back.pages.auditReport.viewReportDetails',$data);

    }

    public function viewChangeDetails($id){
        $data = array();
        $data['changes']=DB::table('changes')->where('company_id', $id)->first();
        return view('back.pages.auditReport.changeDetailsView',$data);


    }

    public function viewSummaryDetail($id){
        $data = array();
        $data['summaries']=DB::table('summaries')->where('company_id', $id)->first();
        return view('back.pages.auditReport.summaryDetailView',$data);

    }

    public function allDetailsView($id){
        $data = array();
        $data['company']=DB::table('companies')->where('id', $id)->first();
        $data['result']=Report::where('company_id', $id)->first();
        $data['changes']=DB::table('changes')->where('company_id', $id)->first();
        $data['summaries']=DB::table('summaries')->where('company_id', $id)->first();
        return view('back.pages.auditReport.allDetailsView',$data);
    }

    public function editReport($id){

        $query = DB::table('reports')->where('id', $id)->first();
        $company = $query->company_id;
        $stage= $query->stage;
        $certificate = $query->certificate_id;


        $data = array();
        //  $data['companies']= $company;
        //  $data['certificates']= $certificate;
        //  $data['stage']=  $stage;
        $data['questions']= DB::table('questions')->where('stage',$stage)->where('certificate_id', $certificate)->paginate(20);
        $data['result']=Report::where('id', $id)->first();
        return view('back.pages.auditReport.editReport',$data);

    }
    public function editChange($id){
        $data = array();
        $data['result']=DB::table('changes')->where('company_id', $id)->first();
        return view('back.pages.auditReport.editChange',$data);
        
    }

    public function editSummary($id){

    }

    public function updateReport(Request $request, $id){
        $time=time(); 
        $data = array();
        // $data['company_id']= $request->company_id;
        $data['certificate_id']= $request->certificate_id;
        $data['stage']= $request->stage;
        $data['question_id']= json_encode($request->question_id );
        $data['status_id']= json_encode($request->status_id);
        $data['evidence_id']=json_encode($request->evidence_id);
        $data['description']=json_encode( $request->description);
        $data['updated_by']= Auth::guard('admin')->user()->id;
        $data['updated_at']= date("Y-m-d H:i:s",$time);

        $query = DB::table('reports')->where('id',$id)->update($data);
        if($query){
            Session::flash('message','Report Updated Successfull!!!');
            return redirect()->route('auditReport');
        }


    }





    public function generatePdf($id){
        $data = array();
        $data['company']=DB::table('companies')->where('id', $id)->first();
        $data['result']=Report::where('company_id', $id)->first();
        $data['changes']=DB::table('changes')->where('company_id', $id)->first();
        $data['summaries']=DB::table('summaries')->where('company_id', $id)->first();
        $pdf = PDF::loadView('back.pages.auditReport.allDetailsView', $data);
        return $pdf->download('report.pdf');
    }



    public function deleteReport($id){

        $query= DB::table('reports')->where('id',$id)->delete();
        if($query){
            Session::flash('message','Report Deleted Successfully');
            return redirect()->route('viewReport');
        }

    }

    public function reportStatus($id){
        $time=time(); 
        $data = array();

        $query= DB::table('reports')->where('id',$id)->first();
        if($query->status == 1){
            $data['status']=0;
            $data['updated_by']= Auth::guard('admin')->user()->id;
            $data['updated_at']= date("Y-m-d H:i:s",$time);

            DB::table('reports')->where('id',$id)->update($data);
            Session::flash('message','Report Status Updated Successfully');
            return redirect()->route('viewReport');
        }else if($query->status==0){
            $data['status']=1;
            $data['updated_by']= Auth::guard('admin')->user()->id;
            $data['updated_at']= date("Y-m-d H:i:s",$time);

            DB::table('reports')->where('id',$id)->update($data);
            Session::flash('message','Report Status Updated Successfully');
            return redirect()->route('viewReport');

        }
        


    }

    public function searchCompany(Request $request){
        if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('companies')
        ->where('company_name', 'LIKE', "%{$query}%")
        ->get();
        $output = ' <option value="">'."--Select--".'</option>';
       $output = '';
      foreach($data as $row)
      {
     $output .= '
     <option value="'.$row->id.'">'.$row->company_name.'</option>
     ';
        // $output .= '
        // <li><a href="'.$row->id.'">'.$row->company_name.'</a></li>
        // ';
      }
       $output .= '';
    // $output .= '</ul>';

      echo $output;
     }

    }
}
