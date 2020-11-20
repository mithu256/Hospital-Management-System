<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('blade-scafolding.home');
});
/*Route::post('/ajax',[FrontendController::class,'ajax']);*/

Route::get('/login',[FrontendController::class,'loginpage']);
Route::get('/regi',[FrontendController::class,'Registrationpage']);
Route::get('/booking',[FrontendController::class,'bookingpage']);
Route::get('/channel',[FrontendController::class,'channelDetails']);
Route::get('/appo',[FrontendController::class,'afterLoginPage']);