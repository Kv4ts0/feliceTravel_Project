<?php
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TourController@getHomePage');
Route::get('/tours', 'App\Http\Controllers\TourController@getTourPage');
Route::get('/blog', 'App\Http\Controllers\TourController@getBlogPage');
Route::get('/contact', 'App\Http\Controllers\TourController@getContactPage');

Route::get('/tour/all', 'App\Http\Controllers\TourController@viewAllTour')->name('tours.all');
Route::post('/tour/add', 'App\Http\Controllers\TourController@addNewTour')->name('tours.add');
Route::post('/tour/delete', 'App\Http\Controllers\TourController@deleteTour')->name('tours.delete');
Route::get('/tour/edit/{id}', 'App\Http\Controllers\TourController@editTour')->name('tours.edit');
Route::post('/tour/update/{id}', 'App\Http\Controllers\TourController@updateTour')->name('tour.update');