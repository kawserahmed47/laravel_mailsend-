<?php

namespace App\Http\Controllers;

use App\EmployeeList;
use Illuminate\Http\Request;

class employeeListController extends Controller
{
    public function __construct()
    {
        $this->middleware('administration');
    }
    public function index(){
        return view('back/employeeList/createList');
    }
    public function create(Request $request){
        $employee = new EmployeeList();
        $employee->bankname = $request->bankname;
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->phone = $request->phone;
        $employee->addresh = $request->addresh;
        $employee->email = $request->email;
        $employee->details = $request->details;
        $employee->save();
        return $this->view('back/employeeList/list');


    }

    public function view(){
        $employeeData = EmployeeList::all();
        return view('back/employeeList/list',compact('employeeData'));
    }
    public function edit($id){
        $employeeData = EmployeeList::find($id);
        return view('back/employeeList/edit',compact('employeeData'));

    }
    public function delete($id){
        $data=EmployeeList::find($id);
        $data->delete();
        return $this->view('back/employeeList/list');
    }
    public function updateList(Request $request, $id){
        $employee = EmployeeList::find($id);
        $employee->bankname = $request->bankname;
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->phone = $request->phone;
        $employee->addresh = $request->addresh;
        $employee->email = $request->email;
        $employee->details = $request->details;
        $employee->save();
        return $this->view('back/employeeList/list');
    }
}
