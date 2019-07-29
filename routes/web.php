<?php

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

Route::get('/', 'IndexController@index');
Route::get('/product/{url}', 'ProductController@index');
Route::get('/locale/{lang}', function ($lang) {
    if(in_array($lang, ['en','ru','ua'])) session(['my_locale' => $lang]);

    return redirect()->back();
});

