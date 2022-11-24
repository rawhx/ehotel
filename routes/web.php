<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\guestcontroller;
use App\Http\Controllers\daftar_properti;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\manage_hotel;
use App\Http\Controllers\manage_user;
use App\Http\Controllers\reportcontroller;
use App\Http\Controllers\update_profile;
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
Route::post('daftarp', [daftar_properti::class, 'daftar_properti']);
Route::post('banned', [manage_user::class, 'banned']);
Route::post('report', [reportcontroller::class, 'report']);


// delete 
Route::delete('delete_hotel/{id}', [manage_hotel::class, 'delete_hotel']);
Route::delete('delete_user/{id}', [manage_user::class, 'delete']);


//update lvl
Route::put('banned/{id}', [manage_user::class, 'banned']);

//update profile
Route::put('update/{id}', [update_profile::class, 'update']);

//akses admin user dan admin hotel
Route::group(['middleware' => ['auth','ceklvl:admin_hotel,user,admin']], function(){
    Route::get('/profile', [usercontroller::class, 'profile'])->name('profile');
});


//akses guest
Route::group(['Middleware'=>['guest','ceklvl:banned']], function(){
    Route::get('/', [guestcontroller::class, 'dashboard'])->name('login');
    Route::get('/maps', [guestcontroller::class, 'maps']);
    Route::get('/hotel', [guestcontroller::class, 'hotel']);
    Route::get('/search', [guestcontroller::class, 'search']);
});
    

//akses admin hotel dan user
Route::group(['middleware' => ['auth','ceklvl:user,admin_hotel']], function(){
    Route::get('/data-transaksi', [usercontroller::class, 'transaksi']);
    Route::get('/sukai', [usercontroller::class, 'favorite']);
    Route::get('/pesan', [usercontroller::class, 'pesan']);
    Route::get('/tiket', [usercontroller::class, 'tiket']);
});


//akses admin hotel
Route::group(['middleware' => ['auth','ceklvl:admin_hotel']], function(){
    Route::get('/edit', [manage_hotel::class, 'edit']);
});


//akses admin
Route::group(['middleware' => ['auth','ceklvl:admin']], function(){
    Route::get('/users', [admincontroller::class, 'manage_user']);
    Route::get('/properti', [admincontroller::class, 'manage_hotel']);
    Route::get('/ratting', [admincontroller::class, 'ratting']);
    Route::get('/transaksi', [admincontroller::class, 'transaksi']);
    Route::get('/report', [reportcontroller::class, 'tampil_report']);
});
