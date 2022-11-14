<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\logincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

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



Route::post('login', [logincontroller::class, 'login'])->name('login');
Route::post('daftar', [logincontroller::class, 'daftar']);
Route::get('logout', [logincontroller::class, 'logout']);

Route::group(['Middleware'=>['guest']], function(){
    Route::get('/', function () {
        return view('dashboard');
    })->name('login');
    
    Route::get('/maps', function () {
        return view('maps');
    });
    
    Route::get('/cari-bali', function () {
        return view('pencarian');
    });
    
    Route::get('/hotel', function () {
        return view('hotel');
    });
});

Route::group(['middleware' => ['auth','ceklvl:user']], function(){
    Route::get('/data-transaksi', [usercontroller::class, 'transaksi']);
    Route::get('/sukai', [usercontroller::class, 'favorite']);
    Route::get('/pesan', [usercontroller::class, 'pesan']);
    Route::get('/tiket', [usercontroller::class, 'tiket']);
});

Route::group(['middleware' => ['auth','ceklvl:admin,user']], function(){
    Route::get('/profile', [usercontroller::class, 'profile'])->name('profile');
});

Route::group(['middleware' => ['auth','ceklvl:admin']], function(){
    Route::get('/users', [admincontroller::class, 'user']);
    Route::get('/properti', [admincontroller::class, 'hotel']);
});
