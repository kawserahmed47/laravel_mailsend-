<?php

namespace App\Http\Controllers;

use App\Audit;
use Illuminate\Http\Request;

class auditController extends Controller
{

    public function index(){
        return view('back/audit/create');
    }

    public function create(Request $request){
        $auditData = new Audit();
        $auditData->companyname = $request->companyname;
        $auditData->auditname = $request->auditname;
        $auditData->designation = $request->designation;
        $auditData->phone = $request->phone;
        $auditData->addresh = $request->addresh;
        $auditData->email = $request->email;
        $auditData->details = $request->details;
        $auditData->save();
        return $this->view('back/audit/list');
    }
//
    public function view(){
        $auditData = Audit::all();
        return view('back.audit.list',compact('auditData'));
    }
    public function edit($id){
        $auditData = Audit::find($id);
        return view('back/audit/edit',compact('auditData'));

    }
    public function delete($id){
        $data=Audit::find($id);
        $data->delete();
        return $this->view('back/audit/list');
    }
    public function updateList(Request $request, $id){
        $employee = Audit::find($id);
        $employee->companyname = $request->companyname;
        $employee->auditname = $request->auditname;
        $employee->designation = $request->designation;
        $employee->phone = $request->phone;
        $employee->addresh = $request->addresh;
        $employee->email = $request->email;
        $employee->details = $request->details;
        $employee->save();
        return $this->view('back/audit/list');
    }
}
