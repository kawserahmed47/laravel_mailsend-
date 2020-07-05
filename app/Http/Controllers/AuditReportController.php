<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AuditReportController extends Controller
{
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
        $data['created_by']= "Auditor Name";
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $query = DB::table('reports')->insert($data);
        if($query){
            Session::flash('message','Report Submitted Successfull!!!');
            return redirect()->route('auditReport');
        }
    }

    public function viewReport(){

        $data = array();
        $data['results']=Report::all();
         return view('back.pages.auditReport.auditReportView',$data);
        //return $data;
    }

    public function deleteReport($id){

        $query= DB::table('reports')->where('id',$id)->delete();
        if($query){
            Session::flash('message','Report Deleted Successfully');
            return redirect()->route('viewReport');
        }

    }
}
