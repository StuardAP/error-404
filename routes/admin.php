<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SaleReceiptController;
use App\Http\Controllers\Admin\DetailSaleController;
use App\Http\Controllers\Admin\DetailProjectController;

Route::get('',[AdminController::class ,'index'])->name('admin.home');
Route::resource('clients', ClientController::class)->name('GET','admin.clients');
Route::resource('categories', CategoryController::class)->name('GET','admin.categories');
Route::resource('services', ServiceController::class)->name('GET','admin.services');
Route::resource('projects', ProjectController::class)->name('GET','admin.projects');
Route::resource('sale-receipts', SaleReceiptController::class)->name('GET','admin.sale-receipts');
Route::resource('detail-sale', DetailSaleController::class)->name('GET','admin.detail-sale');
Route::resource('detail-project', DetailProjectController::class)->name('GET','admin.detail-project');
