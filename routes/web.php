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

Auth::routes();


Route::get('/', 'CMS\CmsController@index')->name('home');
Route::get('/zone', 'CMS\CmsController@index')->name('zone');
Route::get('/faq', 'CMS\CmsController@index')->name('faq');
Route::get('/about', 'CMS\CmsController@index')->name('about');
Route::get('/updates', 'CMS\CmsController@index')->name('updates');
Route::get('/blog', 'CMS\CmsController@index')->name('blog');
Route::get('/contact', 'CMS\CmsController@index')->name('contact');
