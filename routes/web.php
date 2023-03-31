<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\epostController;
use App\Http\Controllers\userController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/
Route::get('/index',[admincontroller::class,'index']);
Route::get('/addabout',[admincontroller::class,'addabout']);
Route::post('/aboutaction',[admincontroller::class,'aboutaction']);
Route::get('/viewabout',[admincontroller::class,'viewabout']);
Route::get('/editabout/{id}',[adminController::class,'editabout']);
Route::post('/updateaction/{id}',[admincontroller::class,'updateaction']);
Route::get('/deleteabout/{id}',[adminController::class,'deleteabout']);
Route::get('/viewuser',[adminController::class,'viewuser']);
Route::get('/complaint',[adminController::class,'complaint']);
Route::get('/viewfixeddeposit',[adminController::class,'viewfixeddeposit']);
Route::get('/approve/{id}',[adminController::class,'approve']);
Route::get('/decline/{id}',[adminController::class,'decline']);
Route::get('/viewstelegram',[adminController::class,'viewstelegram']);
Route::get('/send/{id}',[adminController::class,'send']);

Route::get('/viewletter',[adminController::class,'viewletter']);
Route::get('/printeletter/{id}',[adminController::class,'printeletter']);
Route::get('/sendeletter/{id}',[adminController::class,'sendeletter']);
Route::get('/adminprofile',[admincontroller::class,'adminprofile']);
Route::post('/adminprofileaction',[admincontroller::class,'adminprofileaction']);
Route::get('/logout',[adminController::class,'logout']);


Route::get('/',[epostcontroller::class,'index']);
Route::get('/register',[epostcontroller::class,'register']);
Route::post('/registeraction',[epostcontroller::class,'registeraction']);
Route::get('userlogin',[epostcontroller::class,'userlogin']);
Route::post('/loginaction',[epostcontroller::class,'loginaction']);
Route::get('adminlogin',[epostcontroller::class,'adminlogin']);
Route::post('/adminloginaction',[epostcontroller::class,'adminloginaction']);
Route::get('/about',[epostcontroller::class,'about']);
Route::get('/contact',[epostcontroller::class,'contact']);
Route::post('/contactaction',[epostcontroller::class,'contactaction']);


Route::get('/indexs',[usercontroller::class,'indexs']);
Route::get('/userabout',[usercontroller::class,'userabout']);
Route::get('/myprofile',[usercontroller::class,'myprofile']);
Route::post('/profileaction/{id}',[usercontroller::class,'profileaction']);
Route::get('/fixeddeposit',[usercontroller::class,'fixeddeposit']);
Route::post('/depositaction',[usercontroller::class,'depositaction']);
Route::get('/viewdeposit',[userController::class,'viewdeposit']);

Route::get('/uploadreceipt/{id}',[usercontroller::class,'uploadreceipt']);
Route::post('/uploadaction/{id}',[usercontroller::class,'uploadaction']);
Route::get('/applyeletter',[usercontroller::class,'applyeletter']);
Route::post('/applyaction',[usercontroller::class,'applyaction']);
Route::get('/vieweletter',[userController::class,'vieweletter']);
Route::get('/telegram',[usercontroller::class,'telegram']);
Route::post('/telegramaction',[usercontroller::class,'telegramaction']);
Route::get('/viewtelegram',[userController::class,'viewtelegram']);
