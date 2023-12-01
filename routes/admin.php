<?php

use App\Livewire\Admin\CompetitorManagement;
use App\Livewire\Admin\CriteriaManagement;
use App\Livewire\Admin\EvaluationManagement;
use App\Livewire\Admin\InductionManagement;
use App\Livewire\Admin\RoleManagement;
<<<<<<< HEAD
use App\Livewire\Admin\UserInductionManagement;
=======
use App\Livewire\Admin\CoordiManagement;
>>>>>>> 33f520e6febb15523ab81ca474e95abb6377ff1f
use App\Livewire\Admin\UserManagement;
use App\Models\Evaluation;
use Illuminate\Support\Facades\Route;


Route::get('/users', UserManagement::class)->name('users');

Route::get('/roles', RoleManagement::class)->name('roles');
Route::get('/coordis',CoordiManagement::class)->name('coordis');
Route::get('/voting-result',[CoordiManagement::class,'generateReport'])->name('voting-result');

Route::get('/inductions',InductionManagement::class)->middleware('can:Ver dashboard')->name('inductions');
Route::get('/competitors',CompetitorManagement::class)->middleware('can:Ver dashboard')->name('competitors');
Route::get('/evaluation',EvaluationManagement::class)->middleware('can:Ver dashboard')->name('evaluation');
Route::get('/userinduction',UserInductionManagement::class)->middleware('can:Listar empresas')->name('userinduction');
Route::get('/voting-result',[ResulMain::class,'generateReport'])->name('voting-result');
