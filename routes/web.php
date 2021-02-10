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

Route::get('/', function () {
    return view('pages.home');//con il pages.home gli dico di guardare nella cartella pages e guardare home
});

Route::get('about-us', function()
{
    return view('pages.about');
});

Route::get('blog-us', function () {
    return view('pages.blog');
});

Route::get('projects-us', function()
{
    return view('pages.projects');
});

Route::get('contact-us', function()
{
    return view('pages.contact');
});