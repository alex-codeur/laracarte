<?php

use Illuminate\Support\Facades\Route;

use App\Mail\ContactMessageCreated;

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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/test-email', function () {
    return new ContactMessageCreated('Honoré hounwanou', 'mercuryseries@gmail.com', 'Merci pour Laracarte.');
});

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'ContactsController@create')->name('contact.create');

Route::post('/contact', 'ContactsController@store')->name('contact.store');
