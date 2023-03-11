<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('/admin/roles', [RoleController::class, 'store'])->name('roles.store');
Route::put('/admin/roles/{role}/update', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/admin/roles/{role}/destroy', [RoleController::class, 'destroy'])->name('roles.destroy');
Route::put('/admin/roles/{role}/attach', [RoleController::class, 'attach_permission'])->name('role.permission.attach');
Route::put('/admin/roles/{role}/detach', [RoleController::class, 'detach_permission'])->name('role.permission.detach');


Route::get('/admin/permissions', [PermissionController::class, 'index'])->name('permissions.index');
Route::post('/admin/permissions', [PermissionController::class, 'store'])->name('permissions.store');
Route::put('/admin/permissions/{permission}/update', [PermissionController::class, 'update'])->name('permissions.update');
Route::delete('/admin/permissions/{permission}/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');
