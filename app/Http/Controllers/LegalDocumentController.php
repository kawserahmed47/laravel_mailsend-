<?php

namespace App\Http\Controllers;

use App\Legaldocument;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class LegalDocumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('administration');
    }



    public function legalDocument(){
        $legalDocument = Legaldocument::all();
        return view('back/employeeList/legalDocument')->with('legalDocument',$legalDocument);

//        return  view('back/employeeList/legalDocument');
    }



    public function createDocument(Request $request){
        $legalDocument = new Legaldocument();
        $legalDocument->name = $request->name;
        $legalDocument->details = $request->details;

        $image3 = $request->file('document_pdf');
        if (isset($image3)){
            $currentDate = Carbon::now()->toDateString();
            $imageName3 = uniqid().'-'.$currentDate.'.'.$image3->getClientOriginalExtension();

            if (!file_exists('uploads/LegalDocumentPdf')){
                mkdir('uploads/LegalDocumentPdf',0777,true);
            }
            $image3->move('uploads/LegalDocumentPdf',$imageName3);
        }else{
            $imageName3 = 'default.png';
        }
        $legalDocument->document_pdf =$imageName3;
        $legalDocument->save();
//        return view('back/employeeList/legalDocument');
        return Redirect::to('dashboard/legalDocument');

    }

    public function documentDelete($id){
        $data=Legaldocument::find($id);
        if (file_exists('uploads/LegalDocumentPdf/'.$data->document_pdf)){
            unlink('uploads/LegalDocumentPdf/'.$data->document_pdf);
        }
        $data->delete();
        return Redirect::to('dashboard/legalDocument');
    }

    public function legalDocumentEdit($id){
        $legalDocument = Legaldocument::find($id);
        return view('back/employeeList/legalDocument',compact('legalDocument'));

    }

    public function updateLegalDocument(Request $request){
        $data = $request->abc;
        $legalDocument = Legaldocument::find($data);

        $legalDocument->name = $request->name;
        $legalDocument->details = $request->details;


        $image3 = $request->file('document_pdf');
        if (isset($image3)){

            if (file_exists('uploads/LegalDocumentPdf/'.$legalDocument->document_pdf)){
                unlink('uploads/LegalDocumentPdf/'.$legalDocument->document_pdf);
            }

            $currentDate = Carbon::now()->toDateString();
            $imageName3 = uniqid().'-'.$currentDate.'.'.$image3->getClientOriginalExtension();

            if (!file_exists('uploads/LegalDocumentPdf')){
                mkdir('uploads/LegalDocumentPdf',0777,true);
            }
            $image3->move('uploads/LegalDocumentPdf',$imageName3);
        }else{
            $imageName3 = $legalDocument->document_pdf;
        }
        $legalDocument->document_pdf =$imageName3;
        $legalDocument->save();
        return Redirect::to('dashboard/legalDocument');


    }



//legalDocumentEdit

}
