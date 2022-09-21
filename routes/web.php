<?php

use App\Http\Controllers\controllerweb;
use App\Http\Controllers\CustomersController;
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

Route::middleware('auth')->group(function()
{
    Route::get('/', [controllerweb::class, 'index'])-> name('index');
    Route::get('PDF/{id}',[controllerweb::class, 'PDF'])-> name('PDF');
    Route::get('list', [controllerweb::class, 'listofhappiness'])-> name('listofhappiness');
    Route::get('/vlozit', [controllerweb::class, 'createhappiness'])-> name('createhappiness');
    Route::get('/klient/update/{id}', [CustomersController::class, 'update1'])-> name('update1');
    
    
    Route::post('/ulozit', [controllerweb::class, 'store'])-> name('store');
    Route::put('/edit/{id}', [controllerweb::class, 'edit'])-> name('edit');
    Route::get('/update/{id}', [controllerweb::class, 'update'])-> name('update');
    Route::delete('/delete/{id}', [controllerweb::class, 'delete'])-> name('delete');
    
    Route::resource('klient',CustomersController::class);
    
    
    Route::post('/klient/create', [CustomersController::class, 'store1'])-> name('store1');
    Route::get('/klient', [CustomersController::class, 'listofhappiness1'])-> name('listofhappiness1');
    Route::put('/klien/edit/{id}', [CustomersController::class, 'edit'])-> name('edit');
    Route::get('/klient/update/{id}', [CustomersController::class, 'update1'])-> name('update1');
    Route::view('/profile', 'auth.profile')->name('profile');
    Route::view('/zmena-hesla', 'auth.passwords.change')->name('passwords.change');


});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
