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
});

Route::get('/onboarding/index/{company_name}', 'OnboardingUserController@index');
Route::get('/onboarding/index', 'OnboardingUserController@index')->name('onboardingindex');
Route::get('onboarding/edit/{id}', 'OnboardingUserController@edit')->name('editonboarding');
Route::get('onboarding/edit2/{id}', 'OnboardingUserController@edit2');
Route::post('/onboarding/store', 'OnboardingUserController@store');
Route::resource('/onboarding', 'OnboardingUserController');

Route::post('onboarding/delete/{id}', 'OnboardingUserController@destroycompany')->name('forget');
