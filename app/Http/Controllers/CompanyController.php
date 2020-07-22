<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auditor');
    }
    public function addCompany()
    {
        return view('back.pages.auditReport.company');
    }
//id	company_name	address	email	phone	mobile	hotline	description	status	created_by	updated_by	created_at	updated_at

    public function insertCompany(Request $request)
    {
        // $certificate =$request->certificates_id;
        // $stage =$request->stage;
        
        $CompanyData=new Company();
        $CompanyData->company_name = $request->company_name;
        $CompanyData->address = $request->address;
        $CompanyData->standard_name = $request->standard_name;
        $CompanyData->site_address = $request->site_address;
        $CompanyData->employees_num = $request->employees_num;
        $CompanyData->shift_num = $request->shift_num;
        $CompanyData->email = $request->email;
        $CompanyData->contact = $request->contact;
        $CompanyData->phone = $request->phone;
        $CompanyData->mobile = $request->mobile;
        $CompanyData->scope = $request->scope;
        $CompanyData->technical_area = $request->technical_area;
        $CompanyData->exclusion = $request->exclusion;
        $CompanyData->audit_team = $request->audit_team;
        $CompanyData->audit_duration = $request->audit_duration;
        $CompanyData->s_audit_date = $request->s_audit_date;
        $CompanyData->e_audit_date = $request->e_audit_date;
        $CompanyData->brief = $request->brief;
        $CompanyData->objective = $request->objective;
        $CompanyData->status = $request->stage;
        $CompanyData->created_by =Auth::guard('admin')->user()->id;

        if(isset($request->status)){
            $CompanyData->status = true;
        }else{
            $CompanyData->status = false;
        }
        $CompanyData->save();
        $company=$CompanyData->id;

        // print_r($company);
        Session::flash('message','Company Inserted Successful!!!');
        return Redirect::to('/dashboard/changesummary/'.$certificate.'/'.$stage.'/'.$company);
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
        $CompanyData->standard_name = $request->standard_name;
        $CompanyData->site_address = $request->site_address;
        $CompanyData->employees_num = $request->employees_num;
        $CompanyData->shift_num = $request->shift_num;
        $CompanyData->email = $request->email;
        $CompanyData->contact = $request->contact;
        $CompanyData->phone = $request->phone;
        $CompanyData->mobile = $request->mobile;
        $CompanyData->scope = $request->scope;
        $CompanyData->technical_area = $request->technical_area;
        $CompanyData->exclusion = $request->exclusion;
        $CompanyData->audit_team = $request->audit_team;
        $CompanyData->audit_duration = $request->audit_duration;
        $CompanyData->s_audit_date = $request->s_audit_date;
        $CompanyData->e_audit_date = $request->e_audit_date;
        $CompanyData->brief = $request->brief;
        $CompanyData->objective = $request->objective;
        $CompanyData->status = $request->stage;
        $CompanyData->updated_by = Auth::guard('admin')->user()->id;
        $CompanyData->save();
        Session::flash('message','Updated Successful');
        return redirect()->to('/dashboard/viewCompany');
    }

}
