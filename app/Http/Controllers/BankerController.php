<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class BankerController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function addBanker(){
        $data = array();
        $data['results']= DB::table('banks')->get();
        return view('back.pages.banker.addBanker',$data);
    }

    public function insertBanker(Request $request){
        $time = time();
        $data= array();
        $data['bank_id']=$request->bank_id;
        $data['name']=$request->name;
        $data['designation']=$request->designation;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['mobile']=$request->mobile;
        $data['phone']=$request->phone;
        $data['description']=$request->description;
        $data['created_by']="Admin";
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $query =DB::table('bankers')->insert($data);
        if($query){
            Session::flash('message','Banker Added Successful!!!');
            return redirect()->route('dashboard');
        }

    }

    public function viewBanker(){
        $data = array();
        $data['results']=DB::table('bankers')->get();
        return view('back.pages.banker.viewBanker',$data);
    }
    public function deleteBanker($id){
        $query=DB::table('bankers')->where('id',$id)->delete();
        if($query){
            Session::flash('message','Banker Deleted Successful!!!');
            return redirect()->route('viewBanker');
        }

    }
    public function editBanker($id){
        $data = array();
        $data['banks']=DB::table('banks')->get();
        $data['result']=DB::table('bankers')->where('id',$id)->first();
        return view('back.pages.banker.editBanker',$data);
    }

    public function updateBanker(Request $request,$id){
        $time = time();
        $data= array();
        $data['bank_id']=$request->bank_id;
        $data['name']=$request->name;
        $data['designation']=$request->designation;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['mobile']=$request->mobile;
        $data['phone']=$request->phone;
        $data['description']=$request->description;
        $data['updated_by']="Admin";
        $data['updated_at']= date("Y-m-d H:i:s",$time);

        $query =DB::table('bankers')->where('id',$id)->update($data);
        if($query){
            Session::flash('message','Banker Updated Successful!!!');
            return redirect()->route('viewBanker');
        }

    }

    public function bankerSearch(Request $request){
        $searchBy = $request->searchBy;
        if($searchBy==1){
            $name = $request->name;
            $data= array();
        
            $query=DB::table('banks')->where('name', $name)->first();
            if($query){
                $data['results']=DB::table('bankers')->where('bank_id', $query->id)->get();
                return view('back.pages.banker.viewBanker',$data);
            }else{
                $data['results']= "";
                return view('back.pages.banker.viewBanker',$data);

            }
            

        }elseif($searchBy==2){
            $name = $request->name;
            $data = array();
            $data['results']=  DB::table('bankers')->where('name', 'LIKE', "%{$name}%")->get();
            return view('back.pages.banker.viewBanker',$data);

        }else{
            Session::flash('message','Search By Not Selected!!!');
            return redirect()->route('viewBanker');

        }

    }
}
