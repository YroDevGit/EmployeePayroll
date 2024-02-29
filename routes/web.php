<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users_controll;
use App\Http\Controllers\roles_controll;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//basics
Route::get('/', function () {
    return view('login');
});

Route::get('/employee', function(){
    return view('pages.employee');
});

Route::get('/user/dashboard',function(){
    return view('pages.dashboard');
});
Route::get("/roles",function(){
return view("pages.roles");
});


Route::get("/print", [users_controll::class,"getFullName"]);




//POST
Route::post('user/login', [users_controll::class,"login"])->name('loginPOST');
Route::post('Add/Employee', [users_controll::class,'addEmployee'])->name('addEmployee');
Route::post("add/roles",[roles_controll::class,'addRole'])->name('addRole');



//Routes
Route::get("/", function(){
return view('login');
})->name('login');

Route::get('/user/dashboard',function(){
return view('pages.dashboard');
})->name('dashboard');

Route::get('/logout',function(){
    Session()->put('log',null);
    return view('login');
})->name('logout');

Route::get("/user/employee", function(){
    return view("pages.employee");
})->name('employee');

Route::get("/user/roles", function(){
    return view("pages.roles");
})->name("roles");


//API

Route::get("/api/roles", [roles_controll::class,"getRoles"]);
Route::get("/api/searchroles", [roles_controll::class,"searchRoles"]);

Route::get("/api/employee",[users_controll::class,"showEmployees"]);

Route::get("/api/deleteEmployee",[users_controll::class,"hideEmployee"]);
Route::get("/api/deleteRole",[roles_controll::class,"deleteRole"]);