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

// Dashboard
Route::get('/ecommerce-dashboard', function () {
    return view('pages.ecommerce-dashboard', ['type_menu' => 'dashboard']);
});

Route::get('/general-dashboard', function () {
    return view('pages.general-dashboard', ['type_menu' => 'dashboard']);
});

// Layout
Route::get('/default-layout', function () {
    return view('pages.default-layout', ['type_menu' => 'layout']);
});

// Blank Page
Route::get('/blank-page', function () {
    return view('pages.blank-page', ['type_menu' => '']);
});

// Bootstrap
Route::get('/alert', function () {
    return view('pages.alert', ['type_menu' => 'bootstrap']);
});
Route::get('/badge', function () {
    return view('pages.badge', ['type_menu' => 'bootstrap']);
});
Route::get('/breadcrumb', function () {
    return view('pages.breadcrumb', ['type_menu' => 'bootstrap']);
});
Route::get('/buttons', function () {
    return view('pages.buttons', ['type_menu' => 'bootstrap']);
});
Route::get('/card', function () {
    return view('pages.card', ['type_menu' => 'bootstrap']);
});
Route::get('/carousel', function () {
    return view('pages.carousel', ['type_menu' => 'bootstrap']);
});
Route::get('/collapse', function () {
    return view('pages.collapse', ['type_menu' => 'bootstrap']);
});
Route::get('/dropdown', function () {
    return view('pages.dropdown', ['type_menu' => 'bootstrap']);
});
Route::get('/form', function () {
    return view('pages.form', ['type_menu' => 'bootstrap']);
});
Route::get('/list-group', function () {
    return view('pages.list-group', ['type_menu' => 'bootstrap']);
});
Route::get('/media-object', function () {
    return view('pages.media-object', ['type_menu' => 'bootstrap']);
});
Route::get('/modal', function () {
    return view('pages.modal', ['type_menu' => 'bootstrap']);
});
Route::get('/nav', function () {
    return view('pages.nav', ['type_menu' => 'bootstrap']);
});
Route::get('/navbar', function () {
    return view('pages.navbar', ['type_menu' => 'bootstrap']);
});
Route::get('/pagination', function () {
    return view('pages.pagination', ['type_menu' => 'bootstrap']);
});
Route::get('/popover', function () {
    return view('pages.popover', ['type_menu' => 'bootstrap']);
});
Route::get('/progress', function () {
    return view('pages.progress', ['type_menu' => 'bootstrap']);
});
Route::get('/table', function () {
    return view('pages.table', ['type_menu' => 'bootstrap']);
});
Route::get('/tooltip', function () {
    return view('pages.tooltip', ['type_menu' => 'bootstrap']);
});
Route::get('/typography', function () {
    return view('pages.typography', ['type_menu' => 'bootstrap']);
});
