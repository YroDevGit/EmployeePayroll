<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roles;
use Illuminate\Support\Facades\DB;

class roles_controll extends Controller
{
    function getRoles(){
        $datas = roles::where([["role_stat","0"],["role_id","!=","1"]])->orderBy('role_desc','asc')->get();
        return response()->json($datas);

    }


    function searchRoles(Request $req){
        $val = $req->input('q');
        $datas = roles::where([["role_stat","0"],["role_id","!=","1"], ["role_desc","like","%".$val."%"]])->orderBy('role_id','desc')->get();
        return response()->json($datas);
    }

    function addRole(Request $req){
        $req->validate([
            'job' => 'required',
            'salary' => 'required'
        ]);
        
        roles::insert([
            'role_desc' => $req->input('job'),
            'Salary' => $req->input('salary'),
            'date_added' => now(),
            'role_stat' => "0"
        ]);

        return back()->with("success","successfully added");
    }


    function deleteRole(Request $req){
        $val = $req->input('q');
        DB::update("update roles set role_stat = 1 where role_id = ?",[$val]);
        return back()->with("deleted","success");
    }

}
