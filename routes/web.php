<?php
use App\Models\Tour;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Controllers\TourController@getHomePage');
Route::get('/tours', 'App\Http\Controllers\TourController@getTourPage')->name('tourshome.all');
Route::get('/blog', 'App\Http\Controllers\TourController@returnBlogPage');
Route::get('/contact', 'App\Http\Controllers\TourController@getContactPage');
Route::get('/atour/{id}', 'App\Http\Controllers\TourController@returnTourPage')->name('tour');

Route::middleware('custom-auth')->get('/tour/all', 'App\Http\Controllers\TourController@viewAllTour')->name('tours.all');
Route::middleware('custom-auth')->post('/tour/add', 'App\Http\Controllers\TourController@addNewTour')->name('tours.add');
Route::middleware('custom-auth')->post('/tour/delete', 'App\Http\Controllers\TourController@deleteTour')->name('tours.delete');
Route::middleware('custom-auth')->get('/tour/edit/{id}', 'App\Http\Controllers\TourController@editTour')->name('tours.edit');
Route::middleware('custom-auth')->post('/tour/update/{id}', 'App\Http\Controllers\TourController@updateTour')->name('tour.update');

Route::middleware('custom-auth')->get('/blog/all', 'App\Http\Controllers\TourController@viewAllBlog')->name('blogs.all');
Route::middleware('custom-auth')->post('/blog/add', 'App\Http\Controllers\TourController@addNewBlog')->name('blogs.add');
Route::middleware('custom-auth')->post('/blog/delete', 'App\Http\Controllers\TourController@deleteBlog')->name('blogs.delete');
Route::middleware('custom-auth')->get('/blog/edit/{id}', 'App\Http\Controllers\TourController@editBlog')->name('blogs.edit');
Route::middleware('custom-auth')->post('/blog/update/{id}', 'App\Http\Controllers\TourController@updateBlog')->name('blog.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('custom/register', [App\Http\Controllers\AuthorizationController::class, 'register'])->name('auth.custom.register')->middleware('guest');
Route::post('custom/login', [App\Http\Controllers\AuthorizationController::class, 'login'])->name('auth.custom.login')->middleware('guest');
Route::post('custom/reset-password', [App\Http\Controllers\AuthorizationController::class, 'reset'])->name('auth.custom.reset')->middleware('guest');
Route::post('custom/logout', [App\Http\Controllers\AuthorizationController::class, 'logout'])->name('auth.custom.logout')->middleware('auth');
