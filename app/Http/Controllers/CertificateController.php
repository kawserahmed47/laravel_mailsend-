<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auditor');
    }
    public function addCertificate()
    {
        return view('back.pages.certificate.addCertificate');
    }
//
//{{--
//id	certificate_name	description	status	created_by	updated_by	created_at	updated_at
//--}}

    public function insertCertificate(Request $request)
    {

        $image=$request->file('image');
      
            if($image){
                $image_name=Str::random(12);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path='certificateImg/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if($success){
                    $img=$image_url;
                    $CertificateData=new Certificate();
                    $CertificateData->certificate_name = $request->certificate_name;
                    $CertificateData->description = $request->description;
                    $CertificateData->image=$img;
                    if(isset($request->status)){
                    $CertificateData->status = true;
                    }else{
                    $CertificateData->status = false;
                    }
                    $CertificateData->save();
                    Session::flash('message','Certificate Insert Successful!!!');
                    return redirect()->to('/dashboard/viewCertificate');
                }
            } else{
                Session::flash('message','Image not getting!!!');
                return redirect()->to('/dashboard/viewCertificate');

            }

        
    }
//
    public function viewCertificate()
    {
        $CertificateData= Certificate::latest()->paginate(5);
        return view('back.pages.certificate.viewCertificate',compact('CertificateData'));
    }
//
    public function deleteCertificate($id)
    {
        $CertificateData=Certificate::find($id);
        $CertificateData->delete();
        return redirect()->to('/dashboard/viewCertificate');

    }
//
    public function editCertificate($id)
    {
        $CertificateData=Certificate::find($id);
        return view('back.pages.certificate.editCertificate',compact('CertificateData'));

    }
////
    public function updateCertificate(Request $request, $id)
    {
        $CertificateData= Certificate::find($id);
        $CertificateData->certificate_name = $request->certificate_name;
        $CertificateData->description = $request->description;
        if(isset($request->status)){
            $CertificateData->status = true;
        }else{
            $CertificateData->status = false;
        }
        $CertificateData->save();
        return redirect()->to('/dashboard/viewCertificate');
    }
}
