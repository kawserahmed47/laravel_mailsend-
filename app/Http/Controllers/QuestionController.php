<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function addQuestion()
    {
        return view('back.pages.question.addQuestion');
    }

    public function insertQuestion(Request $request)
    {
        $questionData=new Question();
        $questionData->question = $request->question;
        if(isset($request->status)){
            $questionData->status = true;
        }else{
            $questionData->status = false;
        }
        $questionData->save();
        Session::flash('message','Question Insert Successful!!!');
        return redirect()->to('dashboard/viewQuestion');
     }

    public function viewQuestion()
    {
        $questionData= Question::all();
        return view('back.pages.question.viewQuestion',compact('questionData'));
//        print_r($questionData);
    }

    public function deleteQuestion($id)
    {
        $questionData=Question::find($id);
        $questionData->delete();
        return redirect()->to('dashboard/viewQuestion');

    }

    public function editQuestion($id)
    {
        $questionData=Question::find($id);
        return view('back.pages.question.editQuestion',compact('questionData'));

    }

    public function updateQuestion(Request $request, $id)
    {
        $questionData= Question::find($id);
        $questionData->question = $request->question;
        if(isset($request->status)){
            $questionData->status = true;
        }else{
            $questionData->status = false;
        }
        $questionData->save();

        return redirect()->to('dashboard/viewQuestion');
    }
}
