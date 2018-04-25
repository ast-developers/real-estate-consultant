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
Route::get('/faq', 'CMS\CmsController@index')->name('faq');
Route::get('/about', 'CMS\CmsController@index')->name('about');
Route::get('/updates', 'CMS\CmsController@index')->name('updates');
Route::get('/blog', 'CMS\CmsController@index')->name('blog');
Route::get('/contact', 'CMS\CmsController@index')->name('contact');
Route::post('/contact', 'CMS\CmsController@post')->name('postContact');
Route::get('/services', 'Form\FormController@index')->name('services');
Route::get('/zoneForm', 'Form\FormController@index')->name('zoneForm');
//Route::get('/customerInfo', 'Form\FormController@index')->name('customerInfo');
Route::post('/services', 'Form\FormController@post')->name('postZone');
Route::get('/termsCondition', 'CMS\CmsController@index')->name('termsCondition');
Route::get('/policy', 'CMS\CmsController@index')->name('policy');
Route::get('/liability', 'CMS\CmsController@index')->name('liability');

