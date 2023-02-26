<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', function () { return view('pages.index'); })->name('index_page');


Route::get('/counter/example', function () { return view('examples.counter');} )->name('counter_example');



Route::controller(PageController::class)->group(function () {
    //Route::get('/', 'index')->name('index');
    Route::get('/{page}', 'show')->name('page.show');
});


