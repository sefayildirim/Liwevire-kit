<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('page.index');
    Route::get('/create-page', 'create')->name('page.create');
    Route::get('/{page}', 'show')->name('page.show');
});


Route::get('/counter/example', function () { return view('examples.counter');} )->name('counter_example');
