<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\USSD\UssdController;
use App\Http\Controllers\MPESA\MPESAController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\MPESA\MPESAResponseController;

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
// view dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
//ussd mapping
Route::get('/mapussd', [UssdController::class, 'ussdextension'])->name('ussdmaping');

Route::get('/viewussd', [UssdController::class, 'ussdextension'])->name('viewussd');
//edit extension
Route::get('/editussd/{id}', [UssdController::class, 'edit'])->name('editussd');

Route::post('/updateextension/{id}', [UssdController::class, 'updateextension'])->name('updateextension');

Route::post('/delete-extension', [UssdController::class, 'deleteextension'])->name('deleteextension');

Route::match(['get', 'post'],'/addussd', [UssdController::class,'add']
)->name('addussd');
// add code
Route::match(['get', 'post'],'/addcode', [UssdController::class,'addcode']
)->name('addcode');

//view and delete partner
Route::match(['get', 'post'],'/partner', [PartnerController::class,'partner'])->name('partner');

//add partner
Route::match(['get', 'post'],'/partneradd', [PartnerController::class,'add'])->name('partneradd');

//update partner
Route::match(['get','post'],'/partnerupdate/{id}',[PartnerController::class,'update'])->name('editpartner');

//view users
Route::get('/user',  [UserController::class,'user'])->name('user');
//add user
Route::match(['get', 'post'],'/useradd', [UserController::class,'add'])->name('useradd');

//initiate stk push
Route::match(['get', 'post'],'/stkpush/creditaccount', [MPESAController::class,'stkpush'])->name('stkpush');

Route::get('/senddarajaapidata', [MPESAController::class,'depositAmount']);
Route::get('/confirmationstk/{id}', [MPESAResponseController::class,'stkPushresponse']);

Route::get('/viewtransactions', function () {
    return view('pages/viewtransactions');
})->name('viewtransactions');

Route::get('/ussdtraffic', function () {
    return view('pages/ussdtraffic');
})->name('ussdtraffic');


