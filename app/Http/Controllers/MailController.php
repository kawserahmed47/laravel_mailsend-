<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(){
        //$email = 'kawserahmed47@gmail.com';//if single email
        $emails= array("kawserahmed47@gmail.com", "atikhasan2811@gmail.com"); //if multiple email use array;
    

        $details = [
            
            'from' => 'This is for testing email using smtp',
            'name'=>'This is name',
            'message'=>'This is name'
        ];

        $subject ="Atik Hasan";
        foreach($emails as $email){
            \Mail::to($email)->send(new \App\Mail\EsoftMail($details, $subject));

        }
       
       
        dd("Email is Sent.");
    }
}
