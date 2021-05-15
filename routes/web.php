<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class , 'showlogin']);

Route::post('/login', [LoginController::class , 'makelogin'])->name('login');


Route::get('/Laravel' , function(){
    $file = public_path()."/Laravel.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"Laravel.zip",$headers);
});

Route::get('/AJAVA' , function(){
    $file = public_path()."/AJAVA.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"AJAVA.zip",$headers);
});

Route::get('/TOC' , function(){
    $file = public_path()."/TOC.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"TOC.zip",$headers);
});

Route::get('/SE' , function(){
    $file = public_path()."/SE.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"SE.zip",$headers);
});

Route::get('/EBM' , function(){
    $file = public_path()."/EBM.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"EBM.zip",$headers);
});

Route::get('/CG' , function(){
    $file = public_path()."/CG.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"CG.zip",$headers);
});

Route::get('/IoT' , function(){
    $file = public_path()."/IoT.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"IoT.zip",$headers);
});

Route::get('/Unity' , function(){
    $file = public_path()."/Unity.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"Unity.zip",$headers);
});

Route::get('/GE' , function(){
    $file = public_path()."/GE.zip";

    $headers = array(
        'Content-Type: application/zip',
    );

    return Response::download($file,"GE.zip",$headers);
});