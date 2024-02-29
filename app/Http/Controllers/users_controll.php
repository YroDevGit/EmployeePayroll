<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use App\Http\Controllers\mailer_control;
use App\Models\mailer;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;



class users_controll extends Controller
{
    function login(Request $req){
    
            $req -> validate([
                'username' => 'required',
                'password' => 'required'
            ]);
    
            $value = users::where([
                ['username',"=", $req->input('username')],
                ['password',"=" ,$req->input('password')],
                ['role', '=', '1']
            ])->get();   
            $sz = sizeof($value);
    
            if($sz==0){
                return back()->with(["invalid"=>"Account not found"]);
            }
            else{
                Session()->put("log","1");
                Session()->put('user',$value);
                $fname = users_controll::getFullName($req->input("username"));
                Session()->put("fullname", $fname);
                return redirect()->route('employee');
            }
         
    }
    public function getFullName($username){
        $val = users::where("username",$username)->first();
        return $val->full_name;
    }

    public function addEmployee(Request $req){
        $req -> validate([
            'fullname' => 'required',
            'birth' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users,username',
            'hire' => 'required'
        ]);

        $arr = array("1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","T","Y","R","O","N","E","P","L");
        $pw = array("6","3","1","4","5","2","7","8","9","D","B","A","C","E","F","G","H","I","J","T","Y","R","O","N","E","P","L");
        shuffle($pw);
        shuffle($arr);
        $pword = $pw[1].$pw[2].$pw[3].$pw[4].$pw[5];
        $vcode = $arr[0].$arr[1].$arr[2].$arr[3].$arr[4].$arr[5].$arr[6].$arr[7].$arr[8].$arr[9].$req->input("email").$arr[10].$arr[11].$arr[12];
        
        users::insert([
            'full_name' => $req->input('fullname'),
            'birth_date' => $req->input('birth'),
            'contact' => $req->input('contact'),
            'address' => $req->input('address'),
            'role' => $req->input('role'),
            'username' => $req->input('email'),
            'password' => $pword,
            'img' => "notSet",
            'stat' => "0",
            'notified' => "0",
            'vcode' => $vcode,
            'hire_date' => $req->input('hire')
        ]);
        $mailerController = new mailerControll();
        $mailerController-> addMailer($vcode, $pword);
        $full = $req->input('fullname');
        $uname = $req->input('email');
        $pass = $pword;
        $message = "Hello, this is a test email message.";
        Mail::to($uname)->send(new SendMail("data",$full,$uname,$pass));
        return back()->with("success","data is added");
    }

 
    

    function showEmployee(Request $req){
        $value = $req->input('q');
        $data = users::where([
            ["full_name","like","%".$value."%"],
            ["role", ">", "1"],
            ["stat","=", "0"]
        ])->get();
        return response()->json($data);
    }

    function showEmployees(Request $req){
        $value = $req->input('q');
        $wildCard = "%".$value."%";
        $data = DB::select("SELECT u.user_id, u.full_name, u.birth_date, u.contact, u.address, u.notified, u.contact, u.address, u.role, u.hire_date,u.username, u.`password`, u.img, u.stat, r.role_desc FROM users u, roles r WHERE u.role = r.role_id and u.stat in(0,5) and u.role !=1 AND u.full_name LIKE ?",[$wildCard]);
        return response()->json($data);
    }


    function hideEmployee(Request $req){
        $value = $req->input("q");
        DB::update("update users set stat = -1 where user_id = ?",[$value]);
        return back()->with("deleted","data deleted");
    }

   
}
