<?php

use Illuminate\Support\Facades\Route;

// Define routes for the main pages
Route::get('/', function () {
    return view('frontend.index'); // Assuming you have a home.blade.php view in frontend folder
})->name('home');

Route::get('/company', function () {
    return view('frontend.about'); // Assuming you have a company.blade.php view in frontend folder
})->name('company');

Route::get('/mission', function () {
    return view('frontend.mission'); // Assuming you have a mission.blade.php view in frontend folder
})->name('mission');

Route::get('/approach', function () {
    return view('frontend.approach'); // Assuming you have an approach.blade.php view in frontend folder
})->name('approach');

Route::get('/innovation', function () {
    return view('frontend.innovation'); // Assuming you have a innovation.blade.php view in frontend folder
})->name('innovation');

Route::get('/leaders', function () {
    return view('frontend.leaders'); // Assuming you have a leaders.blade.php view in frontend folder
})->name('leaders');

Route::get('/services', function () {
    return view('frontend.services'); // Assuming you have a services.blade.php view in frontend folder
})->name('services');

Route::get('/services-list-fullwidth', function () {
    return view('frontend.services-list'); // Assuming you have a services-list.blade.php view in frontend folder
})->name('services.list.fullwidth');

Route::get('/services-single', function () {
    return view('frontend.services-single'); // Assuming you have a services-single.blade.php view in frontend folder
})->name('services.single');

Route::get('/services-fullwidth', function () {
    return view('frontend.services-full-width'); // Assuming you have a services-fullwidth.blade.php view in frontend folder
})->name('services.fullwidth');

Route::get('/technology', function () {
    return view('frontend.technology'); // Assuming you have a technology.blade.php view in frontend folder
})->name('technology');

Route::get('/blog', function () {
    return view('frontend.blog'); // Assuming you have a blog.blade.php view in frontend folder
})->name('blog');

Route::get('/blog-single', function () {
    return view('frontend.blog-single'); // Assuming you have a blog-single.blade.php view in frontend folder
})->name('blog.single');

Route::get('/careers-single', function () {
    return view('frontend.careers-single'); // Assuming you have a careers-single.blade.php view in frontend folder
})->name('careers.single');

Route::get('/shortcodes', function () {
    return view('frontend.shortcodes'); // Assuming you have a shortcodes.blade.php view in frontend folder
})->name('shortcodes');

Route::get('/404', function () {
    return view('frontend.404'); // Assuming you have a 404.blade.php view in frontend folder
})->name('404');

Route::get('/blank-page', function () {
    return view('frontend.blank-page'); // Assuming you have a blank-page.blade.php view in frontend folder
})->name('blank.page');

Route::get('/careers', function () {
    return view('frontend.careers'); // Assuming you have a careers.blade.php view in frontend folder
})->name('careers');

Route::get('/contact', function () {
    return view('frontend.contact'); // Assuming you have a contact.blade.php view in frontend folder
})->name('contact');