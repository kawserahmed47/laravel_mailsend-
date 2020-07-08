<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function addCompany()
    {
        return view('back.pages.company.addCompany');
    }
//id	company_name	address	email	phone	mobile	hotline	description	status	created_by	updated_by	created_at	updated_at

    public function insertCompany(Request $request)
    {
        $CompanyData=new Company();
        $CompanyData->company_name = $request->company_name;
        $CompanyData->address = $request->address;
        $CompanyData->email = $request->email;
        $CompanyData->phone = $request->phone;
        $CompanyData->mobile = $request->mobile;
        $CompanyData->hotline = $request->hotline;
        $CompanyData->description = $request->description;

        if(isset($request->status)){
            $CompanyData->status = true;
        }else{
            $CompanyData->status = false;
        }
        $CompanyData->save();
        Session::flash('message','Question Insert Successful!!!');
        return redirect()->to('/dashboard/viewCompany');
    }

    public function viewCompany()
    {
        $CompanyData= Company::all();
        return view('back.pages.company.viewCompany',compact('CompanyData'));

    }
//
    public function deleteCompany($id)
    {
        $CompanyData=Company::find($id);
        $CompanyData->delete();
        return redirect()->to('/dashboard/viewCompany');

    }
//
    public function editCompany($id)
    {
        $CompanyData=Company::find($id);
        return view('back.pages.company.editCompany',compact('CompanyData'));

    }
//
    public function updateCompany(Request $request, $id)
    {
        $CompanyData= Company::find($id);

        $CompanyData->company_name = $request->company_name;
        $CompanyData->address = $request->address;
        $CompanyData->email = $request->email;
        $CompanyData->phone = $request->phone;
        $CompanyData->mobile = $request->mobile;
        $CompanyData->hotline = $request->hotline;
        $CompanyData->description = $request->description;
        if(isset($request->status)){
            $CompanyData->status = true;
        }else{
            $CompanyData->status = false;
        }
        $CompanyData->save();
        return redirect()->to('/dashboard/viewCompany');
    }

}
