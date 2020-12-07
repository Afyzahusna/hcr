<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Models\Item;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Subcategory;
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
    return view('landingpage');
});

Auth::routes();

// Route::get('item', function () {
//     return view('items.index');
// });

// Route::get('item/create', function () {
//     return view('items.create');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/item', [ItemController::class, 'items.index']) ->name('items.index');
Route::get('/item/create', [ItemController::class, 'items.create'])->name('items.create');
Route::post('/item', [ItemController::class, 'store']);

Route::get('categories',[CategoryController::class, 'category.index']);
Route::get('categories',[CategoryController::class, 'category.create']);
Route::get('categories',[CategoryController::class, 'category.store']);
Route::get('categories/{id}', function ($category_id){});;

// Route::get('item', 'ItemController@index');
// Route::get('item/create', 'ItemController@create');
// Route::post('/item', 'ItemController@store');