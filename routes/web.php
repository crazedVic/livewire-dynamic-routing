<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Routes;
use App\Http\Livewire\Config;
use App\Http\Livewire\Home;
use App\Http\Livewire\Firms;
use App\Http\Livewire\Leads;
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
Route::get('/', Home\Core::class)->name('home');
Route::get('/firms', Firms\Index::class)->name('firms');
Route::get('/firms/add', Firms\Add::class)->name('firms-add');
Route::get('/leads', Leads\Index::class)->name('leads');
Route::get('/leads/add', Leads\Add::class)->name('leads');

Route::get('/config/{any?}', Config\Core::class)->where('any', '.*')->name('config-home');
Route::get('/{any?}', Routes::class)->where('any', '.*')->name('home');
