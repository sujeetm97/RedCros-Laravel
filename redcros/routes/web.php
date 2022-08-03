<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\aboutcontroller;
use App\Http\Controllers\frontend\appointmentcontroller;
use App\Http\Controllers\frontend\contactcontroller;
use App\Http\Controllers\frontend\needblood;
use App\Http\Controllers\frontend\doctorscontroller;
use App\Http\Controllers\frontend\servicecontroller;
use App\Http\Controllers\frontend\logincontroller;
use App\Http\Controllers\frontend\signUpcontroller;
use App\Http\Controllers\frontend\donorcontroller;
use App\Http\Controllers\frontend\profilecontroller;
use App\Http\Controllers\admin\admin_index;
use App\Http\Controllers\admin\adminlogin;
use App\Http\Controllers\admin\add_age;
/* admin */


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

Route::get('/',[homecontroller::class,'index']);
Route::get('/about',[aboutcontroller::class,'index']);
Route::get('/appointment',[appointmentcontroller::class,'index']);
Route::post('/appointment',[appointmentcontroller::class,'appointmentform']);
Route::get('/contact',[contactcontroller::class,'index']);
Route::post('/contact',[contactcontroller::class,'contactform']);
Route::get('/needblood',[needblood::class,'index']);
Route::post('/needblood',[needblood::class,'search']);
Route::get('/doctors',[doctorscontroller::class,'index']);
//Route::get('/service',[servicecontroller::class,'index']);


Route::get('/logout',function(){
    session()->flush();
    return redirect('/login');
})->middleware('security');

Route::get('/login',[logincontroller::class,'index'])->middleware('security2');
Route::post('/login',[logincontroller::class,'form']);

Route::get('/signup',[signUpcontroller::class,'index'])->middleware('security2');
Route::post('/signup',[signUpcontroller::class,'form']);
/* ------------------donor------------------------*/
Route::get('/donor',[donorcontroller::class,'index'])->middleware('security');
Route::post('/donor',[donorcontroller::class,'form']);



/* ----#-----#----------admin-------#----------#-------*/

Route::get('/admin/index', [admin_index::class, 'index']);

Route::get('/admin/index/add_age',[add_age::class,'index']);
Route::post('/admin/index/add_age',[add_age::class,'form']);

/* ------------------profile--------------------*/
Route::get('/profile',[profilecontroller::class,'index'])->middleware('security');
Route::post('/profile',[profilecontroller::class,'form'])->middleware('security');

/* -----------------Login-------------- */

Route::get('/admin/index/adminlogin',[adminlogin::class,'index'])->middleware('security2');
Route::post('/admin/index/adminlogin',[adminlogin::class,'form']);



