<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BankController extends Controller
{
    public function addBank(){
        return view('back.pages.bank.addBank');
    }

    public function insertBank(Request $request){
        $time = time();
        $data= array();
        $data['name']=$request->name;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['mobile']=$request->mobile;
        $data['hotline']=$request->hotline;
        $data['description']=$request->description;
        $data['created_by']=$request->created_by;
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $query =DB::table('banks')->insert($data);
        if($query){
            Session::flash('message','Bank Added Successful!!!');
            return redirect()->route('dashboard');
        }



    }

    public function viewBank(){
        $data = array();
        $data['results']=DB::table('banks')->get();
        return view('back.pages.bank.viewBank',$data);


    }

    public function deleteBank($id){
        $query=DB::table('banks')->where('id',$id)->delete();
        if($query){
            Session::flash('message','Bank Deleted Successful!!!');
            return redirect()->route('viewBank');
        }

    }

    public function editBank($id){
        $data=array();
        $query=$data['result']=DB::table('banks')->where('id',$id)->first();
        if($query){
          
            return view('back.pages.bank.editBank',$data);
        }

    }

    public function updateBank(Request $request, $id){
        $time = time();
        $data= array();
        $data['name']=$request->name;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['mobile']=$request->mobile;
        $data['hotline']=$request->hotline;
        $data['description']=$request->description;
        $data['updated_by']=$request->created_by;
        $data['updated_at']= date("Y-m-d H:i:s",$time);

        $query =DB::table('banks')->where('id',$id)->update($data);
        if($query){
            Session::flash('message','Bank Updated Successful!!!');
            return redirect()->route('viewBank');
        }
    }
}
