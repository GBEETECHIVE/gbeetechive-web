<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/web-development', function () {
    return view('web_development');
})->name('web_development');
Route::get('/software-development', function () {
    return view('software_development');
})->name('software_development');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/analytic-solutions', function () {
    return view('analytic_solution');
})->name('analytic_solutions');
Route::get('/cloud-and-devops', function () {
    return view('cloud_and_devops');
})->name('cloud_and_devops');
Route::get('/data-center', function () {
    return view('data_center');
})->name('data_center');
Route::get('/product-design', function () {
    return view('product_design');
})->name('product_design');
Route::fallback(function () {
    return view('error');
});
Route::get('/error', function () {
    return view('error');
})->name('error');
Route::get('/recent-projects', function () {
    return view('recent_projects');
})->name('recent_projects');