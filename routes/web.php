<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/login', function (){
    if(Auth::guard()->check()){
        return redirect('home');
    }
    return view('login');
});
Route::get('/home', [AuthController::class,'index'])->middleware('auth');

Route::controller(AuthController::class)->group(function (){
   Route::post('login', 'login')->name('login');
   Route::post('logout', 'logout')->name('logout');
});
Route::controller(AuthController::class)->middleware(['role:admin'])->group(function (){
   Route::get('/testRole', 'testRole');
});
