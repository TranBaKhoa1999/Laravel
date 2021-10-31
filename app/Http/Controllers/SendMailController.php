<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //
    public function sendMail(){
        $user = User::take(1)->first();
        $mail = new HelloMail($user);
        Mail::to("ohwhynotme1999@gmail.com")->queue($mail);
        return true;
    }
}
