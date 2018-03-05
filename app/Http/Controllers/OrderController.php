<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{

    public function enviarEmail(Request $request)
    {

        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['principal'] = "contato@viajavallechile.com";
        $data['from'] = "lkg.master@gmail.com";
        $data['assunto'] = "Contato via Viaja Valle Chile";
        $data['mensagem'] =$request->message;     
        
        Mail::send('mail.reminder', $data, function($message) use ($data){

            $message->from($data['from']);
            $message->to($data['principal']);
            $message->cc($data['from']);
            $message->subject($data['assunto']);


       
        });
        Session::flash('status', 'Task was successful!');
        return redirect('/contato');

    }

    public function enviarPromo(Request $request){

      

        $data['email'] = $request->email;
       
        $data['principal'] = "contato@viajavallechile.com";
        $data['from'] = "lkg.master@gmail.com";
        $data['assunto'] = "Noticias Viaja Valle Chile";
        

       Mail::send('mail.news', $data, function($message) use ($data){

            $message->from($data['from']);
            $message->to($data['principal']);
            $message->cc($data['from']);
            $message->subject($data['assunto']);
       });

        Session::flash('status', 'Task was successful!');
        return redirect('/home'); 
    }
  
}
