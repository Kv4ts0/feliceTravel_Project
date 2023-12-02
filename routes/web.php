<?php
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TourController@getHomePage');
Route::get('/tours', 'App\Http\Controllers\TourController@getTourPage');
Route::get('/blog', 'App\Http\Controllers\TourController@getBlogPage');
Route::get('/contact', 'App\Http\Controllers\TourController@getContactPage');

Route::get('/tour/create', 'App\Http\Controllers\TourController@createTour');
Route::get('/tour/all', 'App\Http\Controllers\TourController@viewAllTour');
Route::post('/tour/add', 'App\Http\Controllers\TourController@addNewTour');