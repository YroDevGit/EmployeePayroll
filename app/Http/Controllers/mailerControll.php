<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mailer;
class mailerControll extends Controller
{
    public function addMailer($mail, $pword){
        mailer::insert([
            "vcode" => $mail,
            "stat" => "0",
            "password" => $pword
        ]);
    }
}
