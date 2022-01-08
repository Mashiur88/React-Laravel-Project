<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\loanController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\accountVerify;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//employee controller
//Route::get('/employee/dashboard',[employeeController::class,'enterDash']);
Route::get('/employee/edit/{id}',[employeeController::class,'editProfile']);
Route::post('/employee/edit/{id}',[employeeController::class,'updateProfile']);
Route::get('/employee/profile/{id}',[employeeController::class,'viewProfile']);

//loan controller
Route::get('/employee/loanrequests',[loanController::class,'requestlist']);
Route::get('/employee/loanrequests/document/{id}',[loanController::class,'viewdocument']);
Route::post('/employee/loanrequests/document/{id}',[loanController::class,'verifyloan']);

//news controller
//Route::get('/employee/news',[newsController::class,'createnews']);
Route::post('/employee/news',[newsController::class,'submitnews']);

//accountVerify

//Route::get('employee/Accountinfo',[accountVerify::class,'accountlist']);
Route::get('/employee/Accountinfo','accountVerify@accountlist');
Route::get('/employee/Accountinfo/document/{id}','accountVerify@viewinfo');
Route::post('/employee/Accountinfo/document/{id}','accountVerify@verifyaccount');




