<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\cadastros;
use App\Http\Controllers\login;
use App\Http\Controllers\autenticar;
use App\Http\Controllers\admin;

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

Route::get("/", [index::class, 'home'])->name('home');
// Route::get("/cadastro", [cadastro::class, 'cadastrar'])->name('cadastrar');

Route::get("/cadastrar", [login::class, 'login'])->name("login");
Route::post("/cadastrar", [login::class, 'cadastros'])->name("cadastrar");

Route::get("/signin", [login::class, 'entrar'])->name("entrar");
Route::post("/signin", [autenticar::class, 'login'])->name("entrar");


Route::get("/admin", [admin::class, 'admin'])->name("admin");