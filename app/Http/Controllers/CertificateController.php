<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CertificateController extends Controller
{
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
        $CertificateData=new Certificate();
        $CertificateData->certificate_name = $request->certificate_name;
        $CertificateData->description = $request->description;

        if(isset($request->status)){
            $CertificateData->status = true;
        }else{
            $CertificateData->status = false;
        }
        $CertificateData->save();
        Session::flash('message','Question Insert Successful!!!');
        return redirect()->to('/dashboard/viewCertificate');
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
