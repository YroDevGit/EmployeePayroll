<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mailer;

class mailer_control extends Controller
{
    public function addMailer($mail, $pw){
        mailer::insert([
            "vcode" => $mail,
            "stat" => "0",
            "password" => $pw
        ]);
    }


}
