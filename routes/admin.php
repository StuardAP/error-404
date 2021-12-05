<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\MarketerController;
use App\Http\Controllers\Admin\DesignerController;
// use App\Http\Controllers\Admin\AdvanceController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdministratorController;
use Illuminate\Support\Facades\Route;

Route::get('',[AdminController::class ,'index'])->name('admin.home');
Route::resource('clients', ClientController::class)->name('GET','admin.clients');
// Route::resource('advances', AdvanceController::class)->name('GET','admin.advances');
Route::resource('developer', DeveloperController::class)->name('GET','admin.developer');
Route::resource('marketer', MarketerController::class)->name('GET','admin.marketer');
Route::resource('designer', DesignerController::class)->name('GET','admin.designer');
Route::resource('administrator', AdministratorController::class)->name('GET','admin.administrator');
Route::resource('employee', EmployeeController::class)->name('GET','admin.employee');
// Route::resource('bills',BillController::class)->name('GET','admin.bills');
