<?php

use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\lokerController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\MemberController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tes-admin', function () {
    return view('layouts.admin');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/', function () {
            return view('admin.index');

        });
        Route::resource('/loker', lokerController::class);
        Route::resource('/informasi', InformasiController::class);
        Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index']);

    });

Route::group(['prefix' => 'user', 'middleware' => ['auth']],
    function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');
    });
Route::get('detail/{id}', [App\Http\Controllers\MemberController::class, 'detail']);
Route::get('artikel/{id}', [App\Http\Controllers\MemberController::class, 'artikel']);

Route::get('daftar', [App\Http\Controllers\DaftarController::class, 'create']);
Route::post('daftar/store', [App\Http\Controllers\DaftarController::class, 'store']);
