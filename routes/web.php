<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('/about/about', [HomeController::class,'about'])->name('home.about');

Route::get('/contact', [HomeController::class,'contact'])->name('home.contact');


Route::get('/store/{category?}/{item?}', function ($category=null,$item=null) {
    $category=request('category');
    if(isset($category)){
        if(isset($item)){
            return 'view-category '.$category.' and item '.$item;
        }
    }
    return 'view all store';
});


