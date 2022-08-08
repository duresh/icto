<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateProfileController;


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




Route::group(['namespace' => 'App\Http\Controllers'], function()

{

    /**

     * Home Routes

     */

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/skills', 'HomeController@skills')->name('home.skills');
    Route::get('/services', 'HomeController@services')->name('home.services');
    Route::get('/projects', 'HomeController@projects')->name('home.projects');
    Route::get('/team', 'HomeController@team')->name('home.team');
    Route::get('/contact', 'HomeController@contact')->name('home.contact');
    Route::get('/dashboard', 'HomeController@dashboard')->name('home.dashboard');
    Route::get('/chart', 'HomeController@chart')->name('home.chart');
    Route::get('/pay', 'HomeController@pay')->name('home.pay');
    Route::get('/udate-profile','UpdateProfileController@index')->name('update.load');
    Route::post('/save-profile','UpdateProfileController@save_profile')->name('update.save_profile');




    Route::group(['middleware' => ['guest']], function() {

        /**

         * Register Routes

         */

        Route::get('/register', 'RegisterController@show')->name('register.show');

        Route::post('/register', 'RegisterController@register')->name('register.perform');



        /**

         * Login Routes

         */

        Route::get('/login', 'LoginController@show')->name('login.show');

        Route::post('/login', 'LoginController@login')->name('login.perform');



    });



    Route::group(['middleware' => ['auth']], function() {

        /**

         * Logout Routes

         */

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    });

});
