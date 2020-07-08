<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Admin;

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
        return view('back.pages.dashboard',$data);
    }

    public function allContacts(){
        return view('back.pages.allContacts');
    }

    public function viewAdmins(){
        $data = array();
        $data['title']="Admin Views";
        $data['results']=DB::table('admins')->get();
       
        return view('back.pages.admin.viewAdmins',$data);

    }
 public function editAdmin($id){
     

    }
}
