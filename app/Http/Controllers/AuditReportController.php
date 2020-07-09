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
        $data['questions']=Question::all()->count();;
        $data['certificaes']=Certificate::all()->count();;;
        return view('back.pages.auditorDashboard',$data);
    }




    public function auditReport(){
        $data= array();
        $data['companies']= DB::table('companies')->where('status',1)->get();
        $data['certificates']= DB::table('certificates')->where('status',1)->get();
        $data['questions']= DB::table('questions')->where('status',1)->paginate(20);
        return view('back.pages.auditReport.report',$data);
    }

    public function insertReport(Request $request){

        $validatedData = $request->validate([
            'company_id' => 'required',
            'certificate_id' => 'required',
            'stage' => 'required',
        ]);
        $time=time(); 
        $data = array();
        $data['company_id']= $request->company_id;
        $data['certificate_id']= $request->certificate_id;
        $data['stage']= $request->stage;
        $data['question_id']= json_encode($request->question_id );
        $data['status_id']= json_encode($request->status_id);
        $data['evidence_id']=json_encode($request->evidence_id);
        $data['description']=json_encode( $request->description);
        $data['status']= 1;
        $data['created_by']= Auth::guard('admin')->user()->id;
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $query = DB::table('reports')->insert($data);
        if($query){
            Session::flash('message','Report Submitted Successfull!!!');
            return redirect()->route('auditReport');
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

    public function editReport($id){
        $data = array();
        $data['companies']= DB::table('companies')->where('status',1)->get();
        $data['certificates']= DB::table('certificates')->where('status',1)->get();
        $data['questions']= DB::table('questions')->where('status',1)->paginate(20);
        $data['result']=Report::where('id', $id)->first();
        return view('back.pages.auditReport.editReport',$data);

    }

    public function updateReport(Request $request, $id){
        $time=time(); 
        $data = array();
        $data['company_id']= $request->company_id;
        $data['certificate_id']= $request->certificate_id;
        $data['stage']= $request->stage;
        $data['question_id']= json_encode($request->question_id );
        $data['status_id']= json_encode($request->status_id);
        $data['evidence_id']=json_encode($request->evidence_id);
        $data['description']=json_encode( $request->description);
        $data['status']= 1;
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
        $data['questions']=Question::all();
        $data['result']=Report::where('id', $id)->first();
    
        $pdf = PDF::loadView('back.pages.auditReport.viewReportDetails', $data);
         return $pdf->download('report.pdf');
    }



    public function deleteReport($id){

        $query= DB::table('reports')->where('id',$id)->delete();
        if($query){
            Session::flash('message','Report Deleted Successfully');
            return redirect()->route('viewReport');
        }

    }
}
