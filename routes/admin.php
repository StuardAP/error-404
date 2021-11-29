<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
// use App\Http\Controllers\Admin\DevelopController;
// use App\Http\Controllers\Admin\MarketingController;
// use App\Http\Controllers\Admin\DesignController;
// use App\Http\Controllers\Admin\AdvanceController;
// use App\Http\Controllers\Admin\BillController;
// use Illuminate\Support\Facades\Route;

Route::get('',[AdminController::class ,'index'])->name('admin.home');
Route::resource('clients', ClientController::class)->name('GET','admin.clients');
// Route::resource('advances', AdvanceController::class)->name('GET','admin.advances');
// Route::resource('develops', DevelopController::class)->name('GET','admin.develops');
// Route::resource('marketings', MarketingController::class)->name('GET','admin.marketings');
// Route::resource('designs', DesignController::class)->name('GET','admin.designs');
// Route::resource('bills',BillController::class)->name('GET','admin.bills');
