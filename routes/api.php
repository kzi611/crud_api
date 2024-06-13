<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('testing', function(){
    return 'this is a testing';
});
Route::post('add-student',[StudentController::class,'create']);