<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

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
Route::get('/home',[StockController::class, 'home'])->name('home');
Route::get('/item',[StockController::class, 'item'])->name('item');
Route::get('/item/register/',[StockController::class, 'item_Reg'])->name('item_Reg');
Route::post('/item/register/post',[StockController::class, 'item_Post'])->name('item_Post');
Route::get('/item/view?{id}',[StockController::class, 'item_View'])->name('item_View');
Route::post('/item/view?{id}/post',[StockController::class, 'item_View_Post'])->name('item_View_Post');
Route::get('/item/delete/{id}',[StockController::class, 'item_Delete'])->name('item_Delete');
