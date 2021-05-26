<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\All;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/admin','adminlogin');
Route::group(['middleware'=>['adminPage']],function(){
        Route::get('/admin/dashboard',[All::class,'admin']);
        Route::get('/admin/logout',[All::class,'admin_logout']);
});