<?php

use App\Http\Controllers\FeatureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 */




 Route::name('front.')->group(function(){

    Route::view('/', 'front.index') ->name("index");
    Route::view('/about', 'front.about') ->name("about");
    Route::view('/service', 'front.service') ->name("service");
    Route::view('/contact', 'front.contact') ->name("contact");

});




Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware( [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])->group(function(){



    Route::middleware('auth')->group(function(){

        // home page

        Route::view('/', 'admin.index')->name("index");


        // services

        Route::controller(ServiceController::class)->group(function(){
            Route::resource("services",ServiceController::class);


        });

        Route::controller(FeatureController::class)->group(function(){
            Route::resource("features",FeatureController::class);


        });


    });

    require __DIR__.'/auth.php';

});
