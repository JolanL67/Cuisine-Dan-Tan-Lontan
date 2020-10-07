<?php

use App\Http\Controllers\Api\V1\MenuController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => false,
    ]);


// Groupe afin d'appliquer le middleware 'auth' sur plusieurs routes
Route::middleware(['auth'])->group(function () {

    // Route Home
    Route::get('/', 'Controller@home')->name('home');

    // Route Menu
    Route::get('/menu', 'MenuController@browse')->name('menu');
    Route::view('/menu/add', 'menu/add')->name('menu.add.view');
    Route::post('/menu/add', 'MenuController@add')->name('menu.add.post');
    Route::get('/menu/edit/{id}', 'MenuController@edit')->name('menu.edit');
    Route::put('/menu/edit/{id}', 'MenuController@update')->name('menu.update');
    Route::delete('/menu/delete/{id}', 'MenuController@delete')->name('menu.delete');

    // Route Presentation
    Route::get('/presentation', 'PresentationController@show')->name('presentation.show');
    Route::get('/presentation/edit', 'PresentationController@edit')->name('presentation.edit');
    Route::put('/presentation/update', 'PresentationController@update')->name('presentation.update');

    // Route Contact
    Route::get('/contact', 'ContactController@show')->name('contact.show');
    Route::get('/contact/edit', 'ContactController@edit')->name('contact.edit');
    Route::put('/contact/update', 'ContactController@update')->name('contact.update');

});


