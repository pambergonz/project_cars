<?php

namespace App\Http\Controllers;
use App\Mail\MailNotify;


use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function sendEmail()
    {
      $user = auth()->user();
      Mail::to($user)->send(new MailNotify($user));


    }
}
