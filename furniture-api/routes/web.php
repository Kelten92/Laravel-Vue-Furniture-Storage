<?php

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
use Illuminate\Support\Facades\Cache;
use App\Furniture;

Route::get('/', function () {
    return view('welcome');
});

Route::get('meble', function() {    
    $category = Cache::remember('category', 10, function() {
        return Furniture::all();
    });
    return view('welcome',compact('category'));
});
