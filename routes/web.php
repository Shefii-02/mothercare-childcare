<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'public.', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('services/{slug}', 'FrontendController@serviceSingle')->name('services-single');
    Route::get('doctors', 'FrontendController@doctors')->name('doctors');
    Route::get('doctors/{slug}', 'FrontendController@doctorSingle')->name('doctors-single');
    Route::get('packages', 'FrontendController@packages')->name('packages');
    Route::get('packages/{slug}', 'FrontendController@packageSingle')->name('packages-single');
    Route::get('blogs', 'FrontendController@blogs')->name('blogs');
    Route::get('blogs/category/{slug}', 'FrontendController@blogCategory')->name('blog-category');
    Route::get('blogs/{slug}', 'FrontendController@blogSingle')->name('blog-single');
    Route::get('contact-us', 'FrontendController@contact')->name('contact');
    Route::post('contact-us', 'FrontendController@contactSend')->name('contact-send');
    Route::get('about-us', 'FrontendController@about')->name('about');
    Route::post('appointment', 'FrontendController@appointment')->name('appointment');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth:web'],'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    Route::resource('doctors', DoctorController::class)->names('doctors');
    Route::resource('services', ServiceController::class)->names('services');
    Route::resource('banners', BannerController::class)->names('banners');
    Route::resource('packages', PackageController::class)->names('packages');
    Route::resource('appoinments', AppointmentController::class)->names('appoinments');
    Route::resource('enquiry', EnquiryController::class)->names('enquiry');
    Route::resource('gallery', GalleryController::class)->names('gallery');
    Route::resource('activity', GalleryController::class)->names('activity');
    Route::resource('profile', GalleryController::class)->names('profile');
    Route::resource('blogs', BlogPostController::class)->names('blogs');
    Route::resource('blog-category', BlogCategoryController::class)->names('blogs-category');
    
});







