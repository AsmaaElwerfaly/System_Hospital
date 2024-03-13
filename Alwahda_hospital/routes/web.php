<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\PatientsController;

use App\Http\Controllers\PatientsexitController;

Route::get('/', function () {
    return view('auth.login');

    
});

Auth::routes(['register' => false]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource( 'sections' ,SectionsController::class);
Route::resource( 'patients' ,PatientsController::class);


Route::resource('patientsexit',PatientsexitController::class);
Route::get('/showpatients', [PatientsController::class, 'show']);


Route::get('editlogin/{id}',[ PatientsController::class ,'edit']);






Route::get('printlogin/{id}',[PatientsController::class,'printlogin']);
Route::get('printexit/{id}',[PatientsexitController::class,'printexit']);



Route::get('/{page}', 'App\Http\Controllers\AdminController@index');
