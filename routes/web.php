<?php

use App\Http\Controllers\BranchController;
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


Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('home');
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/branch', 'App\Http\Controllers\BranchController');
Route::post('branch/datatables', [\App\Http\Controllers\BranchController::class, 'getDatashoptable'])->name('branch.data');
Route::resource('/report', 'App\Http\Controllers\ReportController');

Route::get('/downloadPDF/{id}', [App\Http\Controllers\ReportController::class, 'downloadPDF'])->name('downloadPDF');
Route::post('report/datatables', [\App\Http\Controllers\ReportController::class, 'getDataalltable'])->name('reportall.data');
Route::resource('/pdpa', 'App\Http\Controllers\PdpaController');

Route::post('branch/delete', [\App\Http\Controllers\BranchController::class, 'delupdate'])->name('branchdel.data');

Route::post('uploadx', [App\Http\Controllers\CKEditorController::class, 'upload'])->name('uploadx');






Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');

});

Route::get('/consent/{id}', [App\Http\Controllers\ConsentController::class, 'show'])->name('consent.data');
Route::post('saveconsent', [App\Http\Controllers\ConsentController::class, 'saveconsent'])->name('saveconsent.data');
Route::resource('/thanks', 'App\Http\Controllers\ThanskController');

