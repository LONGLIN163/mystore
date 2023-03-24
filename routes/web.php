<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'about';
});

Route::get('/contact', function () {
    return 'about';
});

Route::get('/about', function () {
    return 'about';
});

Route::get('/store/{category?}/{item?}', function ($category=null,$item=null) {
    $category=request('category');
    if(isset($category)){
        if(isset($item)){
            return 'view-category '.$category.' and item '.$item;
        }
    }
    return 'view all store';
});

// Route::get('/store', function () {
//     $category=request('category');
//     if(isset($category)){
//         return 'store-category: '.strip_tags($category);
//     }
//     return 'store';
// });


