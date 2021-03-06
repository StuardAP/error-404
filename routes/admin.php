<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SaleReceiptController;
use App\Http\Controllers\Admin\DetailSaleController;
use App\Http\Controllers\Admin\DetailProjectController;

use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\DesignerController;
use App\Http\Controllers\Admin\MarketerController;

Route::get('',[AdminController::class ,'index'])->name('admin.home');
Route::resource('clients', ClientController::class)->name('GET','admin.clients');
Route::resource('categories', CategoryController::class)->name('GET','admin.categories');
Route::resource('services', ServiceController::class)->name('GET','admin.services');
Route::resource('projects', ProjectController::class)->name('GET','admin.projects');
Route::resource('sale-receipts', SaleReceiptController::class)->name('GET','admin.sale-receipts');
Route::resource('detail-sale', DetailSaleController::class)->name('GET','admin.detail-sale');
Route::resource('detail-project', DetailProjectController::class)->name('GET','admin.detail-project');

Route::resource('employees', EmployeeController::class)->name('GET','admin.employees');
Route::resource('administrators', AdministratorController::class)->name('GET','admin.administrators');
Route::resource('developers', DeveloperController::class)->name('GET','admin.developers');
Route::resource('designers', DesignerController::class)->name('GET','admin.designers');
Route::resource('marketers', MarketerController::class)->name('GET','admin.marketers');
