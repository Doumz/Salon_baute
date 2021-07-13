<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\PreocupationtMail;
use Validator;

class MailController extends Controller
{
 
     public function send_mail(Request $request)
    {
        $data= Request()->validate([
            'name'=> 'required',
            'prenom'=> 'required',
            'email'=> 'required|email',
            'message'=> 'required',
        ]);
 
       $data = array(
           'name'=>$request->name,
           'prenom'=>$request->prenom,
           'email'=>$request->email,
            'message'=>$request->message,
           );
 
         try
         {
             Mail::to('test@test.com')
             ->send(new ContactMail($data));
         }
         catch(Exception $e)
         {
 
         }
          Session()->flash('message', 'votre mail a bien été envoyé');
         return redirect('contact');
    } 
}
