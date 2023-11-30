<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Livewire\Admin\RoleManagement;
use App\Livewire\Admin\UserManagement;
use Illuminate\Support\Facades\Route;

route::get('',[HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::get('/users', UserManagement::class)->name('users');

Route::get('/roles', RoleManagement::class)->name('roles');


 Route::resource('/roles', RoleController::class)->middleware('can:editar usuarios')->names('admin.roles');



