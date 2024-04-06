<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('privacy', function () {
    return view('privacy');
});
Route::get('referral', function () {
    return view('referral');
});
Route::get('/products/residential-ipv6', function () {
    return view('products.residential');
});
Route::get('/products/datacenter', function () {
        return view('products.datacenter');
});
Route::get('/products/ipv6', function () {
    return view('products.ipv6' ,$data= [$product='ipv6']);
});
Route::get('blogs', function () {
    return view('Blogs.blog');
});
Route::get('/blogs/{id}', function () {
    return view('Blogs.blogview');
});
Route::redirect('/register', 'https://dashboard.proxies.gg/register?nextUrl=checkout', 302)->name('home.register');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');