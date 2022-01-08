<?php

  use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\employeeController;
// use App\Http\Controllers\loanController;
// use App\Http\Controllers\newsController;
// use App\Http\Controllers\accountVerify;
// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function (){
//     return view('welcome');
// });

// //login controller
// Route::get('/login',[employeeController::class,'viewlogin'])->name('login');
// Route::post('/login',[employeeController::class,'loginCheck'])->name('login');
// Route::get('/logout',[employeeController::class,'logout'])->name('logout');

// //employee controller
// Route::get('/employee/dashboard',[employeeController::class,'enterDash'])->name('employee.dash')->middleware('ValidEmployee');
// Route::get('/employee/edit/{id}',[employeeController::class,'editProfile'])->name('employee.edit')->middleware('ValidEmployee');
// Route::post('/employee/edit/{id}',[employeeController::class,'updateProfile'])->name('employee.edit')->middleware('ValidEmployee');
// Route::get('/employee/profile/{id}',[employeeController::class,'viewProfile'])->name('employee.profile')->middleware('ValidEmployee');

// //loan controller
// Route::get('/employee/loanrequests',[loanController::class,'requestlist'])->name('employee.loanrqsts')->middleware('ValidEmployee');
// Route::get('/employee/loanrequests/document/{id}',[loanController::class,'viewdocument'])->name('employee.document')->middleware('ValidEmployee');
// Route::post('/employee/loanrequests/document/{id}',[loanController::class,'verifyloan'])->name('employee.document')->middleware('ValidEmployee');

// //news controller
// Route::get('/employee/news',[newsController::class,'createnews'])->name('employee.news')->middleware('ValidEmployee');
// Route::post('/employee/news',[newsController::class,'submitnews'])->name('employee.news')->middleware('ValidEmployee');

// //accountVerify
// //Route::get('employee/Accountinfo',[accountVerify::class,'accountlist'])->name('employee.info')->middleware('ValidEmployee');
// Route::get('employee/Accountinfo','accountVerify@accountlist')->name('employee.info')->middleware('ValidEmployee');
// Route::get('/employee/Accountinfo/document/{id}','accountVerify@viewinfo')->name('employee.accview')->middleware('ValidEmployee');
// Route::post('/employee/Accountinfo/document/{id}','accountVerify@verifyaccount')->name('employee.accview')->middleware('ValidEmployee');

