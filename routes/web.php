<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get("/", "AccountController@showLoginForm")->name("index");
Route::post("/login", "AccountController@userlogin")->name("admin.login");
Route::get("/logout", "AccountController@logout")->name("admin.logout");
Route::post("/saveWard", "WardController@store")->name("superadmin.ward.save");

Route::group(["prefix" => "superadmin", "middleware" => "auth"], function(){
    Route::get("/dashboard", "SuperAdminController@index")->name("superadmin.dashboard");

    Route::group(["prefix" => "ward", "middleware" => "auth"], function(){
        Route::get("/create", "WardController@index")->name("superadmin.ward.create");
    //    <meta name="_token" content="{{csrf_token()}}" /> Route::post("/saveWard", "WardController@store")->name("superadmin.ward.save");
    });
});

Route::group(["prefix" => "account", "middleware" => "auth"], function(){
    Route::get("/dashboard", "AccountDepartmentController@index")->name("account.dashboard");
});

Route::group(["prefix" => "doctor", "middleware" => "auth"], function(){
    Route::get("/dashboard", "DoctorController@index")->name("doctor.dashboard");
});

Route::group(["prefix" => "nurse", "middleware" => "auth"], function(){
    Route::get("/dashboard", "NurseController@index")->name("nurse.dashboard");
});

Route::group(["prefix" => "cmd", "middleware" => "auth"], function(){
    Route::get("/dashboard", "CmdController@index")->name("cmd.dashboard");
});

Route::group(["prefix" => "laboratory", "middleware" => "auth"], function(){
    Route::get("/dashboard", "LaboratoryController@index")->name("laboratory.dashboard");
});

Route::group(["prefix" => "pharmacy", "middleware" => "auth"], function(){
    Route::get("/dashboard", "PharmacyController@index")->name("pharmacy.dashboard");
});

