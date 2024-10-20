<?php

use App\Http\Controllers\Backend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\LanguageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '{lang}', 'where' => ['lang' => '[a-zA-Z]{2}']],function (){
    Route::get("/dashboard",function (){
        return view("admin.dashboard");
    })->name("admin.dashboard")->middleware("auth:admin");

});

Route::middleware(["guest","guest:admin"])->group(function (){
    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('admin/login', [AuthenticatedSessionController::class, 'store'])->name("admin.login_store");
});

// languages controll
Route::controller(LanguageController::class)->as("languages.")->prefix("{lang}/languages")
->middleware("auth:admin")->group(function (){
    Route::get("/","index")->name("index");
    Route::get("get-languages","allLanguages")->name("getdata");
    Route::get("create","create")->name("cretae");
    Route::post("store","store")->name("store");
    Route::get("edit/{id}","edit")->name("edit");
    Route::post("update","update")->name("update");
    Route::get("destroy/{id}","destroy")->name("destroy");
    Route::post("status","status")->name("status");
});
