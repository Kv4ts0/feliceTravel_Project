<?php
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TourController@getHomePage');
Route::get('/tours', 'App\Http\Controllers\TourController@getTourPage');
Route::get('/blog', 'App\Http\Controllers\TourController@getBlogPage');
Route::get('/contact', 'App\Http\Controllers\TourController@getContactPage');

Route::get('/tour/all', 'App\Http\Controllers\TourController@viewAllTour');
Route::post('/tour/add', 'App\Http\Controllers\TourController@addNewTour');
Route::post('/tour/delete', 'App\Http\Controllers\TourController@deleteTour');
Route::post('/tour/edit', 'App\Http\Controllers\TourController@editTour');