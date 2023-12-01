<?php

use App\Livewire\Admin\CompetitorManagement;
use App\Livewire\Admin\InductionManagement;
use App\Livewire\Admin\RoleManagement;
use App\Livewire\Admin\CoordiManagement;
use App\Livewire\Admin\UserManagement;
use Illuminate\Support\Facades\Route;


Route::get('/users', UserManagement::class)->name('users');

Route::get('/roles', RoleManagement::class)->name('roles');
Route::get('/coordis',CoordiManagement::class)->name('coordis');

Route::get('/inductions',InductionManagement::class)->middleware('can:Ver dashboard')->name('inductions');
Route::get('/competitors',CompetitorManagement::class)->middleware('can:Ver dashboard')->name('competitors');
