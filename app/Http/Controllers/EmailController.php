<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
//cài thằng này: composer require swiftmailer/swiftmailer
    public function send(Request $request)
    {
        Mail::send(['text'=>'mail'],['name','Phong'],function ($message){
            $message->to('sieuphamyasuo393@gmail.com','To Phong')->subject('Test email');
            $message->from('sieuphamyasuo393@gmail.com','Phong');
        });
    }
}
