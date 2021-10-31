<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailRegisterUser;
use Illuminate\Http\Request;

class RunQueueController extends Controller
{
    //
    public function runQueue(){
        $name = "tran ba khoa";
        SendEmailRegisterUser::dispatch($name);
        return true;
    }
}
