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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/allContacts','DashboardController@allContacts')->name('allContacts');


//Bank
Route::get('/dashboard/addBank','BankController@addBank')->name('addBank');
Route::post('/dashboard/insertBank','BankController@insertBank')->name('insertBank');
Route::get('/dashboard/viewBank','BankController@viewBank')->name('viewBank');
Route::get('/dashboard/deleteBank/{id}','BankController@deleteBank')->name('deleteBank');
Route::get('/dashboard/editBank/{id}','BankController@editBank')->name('editBank');
Route::post('/dashboard/updateBank/{id}','BankController@updateBank')->name('updateBank');

//Banker
Route::get('/dashboard/addBanker','BankerController@addBanker')->name('addBanker');
Route::post('/dashboard/insertBanker','BankerController@insertBanker')->name('insertBanker');
Route::get('/dashboard/viewBanker','BankerController@viewBanker')->name('viewBanker');
Route::post('/dashboard/bankerSearch','BankerController@bankerSearch')->name('bankerSearch');
Route::get('/dashboard/deleteBanker/{id}','BankerController@deleteBanker')->name('deleteBanker');
Route::get('/dashboard/editBanker/{id}','BankerController@editBanker')->name('editBanker');
Route::post('/dashboard/updateBanker/{id}','BankerController@updateBanker')->name('updateBanker');





