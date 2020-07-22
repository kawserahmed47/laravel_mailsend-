<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Audit;
use App\Certificate;
use App\Company;
use App\Question;
use App\Report;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function __construct()
     {
        $this->middleware('admin');
     }



    public function dashboard(){
        $data = array();
        $data['title']=""; 
        $data['audits']=Report::all()->count();
        $data['companies']=Company::where('status',1)->count();
        $data['pcertificates']=Report::where('status',0)->where('stage',2)->count();
        $data['certificaes']=Certificate::all()->count();
        return view('back.pages.dashboard',$data);
    }

   

    public function viewAdmins(){
        $data = array();
        $data['title']="Admin Views";
        $data['results']=DB::table('admins')->get();
       
        return view('back.pages.admin.viewAdmins',$data);

    }
    public function ceodashboard(){
        $data =array();
        $data['audits']=Report::all()->count();
        $data['companies']=Company::where('status',1)->count();
        $data['pcertificates']=Report::where('status',0)->where('stage',2)->count();
        $data['certificaes']=Certificate::all()->count();
        $data['results']=Certificate::all();
        return view('back.pages.ceodashboard',$data);

    }

    // public function auditorDashboard(){
    //     $data =array();
    //     $data['audits']=Report::all()->count();
    //     $data['companies']=Company::all()->count();
    //     $data['questions']=Question::all()->count();
    //     $data['certificaes']=Certificate::all()->count();
    //     $data['results']=Certificate::all();
    //     return view('back.pages.auditorDashboard',$data);
    // }



 public function editAdmin($id){
     

    }
}
