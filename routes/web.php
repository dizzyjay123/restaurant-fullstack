<?php

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


//admin dashboard
Route::get('/admin', 'admin\AdminController@dashboard');


//admin food categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');

Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

Route::put('/admin/food-categories/{id}/', 'admin\FoodCategoriesController@update');

Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');

//admin food items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::post('/admin/food-items', 'admin\FoodItemsController@store');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');

Route::put('/admin/food-items/{id}/', 'admin\FoodItemsController@update');

Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');



//admin customers
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers');

Route::get('/admin/reservations', 'admin\CustomersController@allReservations');




//admin users
Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::post('/admin/users', 'admin\UsersController@store');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');

Route::put('/admin/users/{id}/', 'admin\UsersController@update');

Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete');


Auth::routes();


//admin authentication
Route::get('/admin/register', function () {

    return view('admin/register');
});

Route::get('/admin/login', function () {

    return view('admin/login');
});




//Static pages
Route::get('/', 'StaticPagesController@home');

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');

Route::get('/about', 'StaticPagesController@about');

Route::get('/reservations', 'StaticPagesController@reservations');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/offers', 'StaticPagesController@offers');

Route::get('/home', 'HomeController@index')->name('home');
