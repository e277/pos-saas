<?php

use App\Http\Livewire\Storefront\Backend\AdminDashboard;
use App\Http\Livewire\Storefront\Backend\Adminindox;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'storefront','as' => 'backEnd.'],function (){

    Route::get('/backend/dashboard', AdminDashboard::class)
        ->name('index');

    Route::get('/backend/inbox', Adminindox::class)
        ->name('inbox');

});
