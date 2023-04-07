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
    return response('', 200)->header('Content-Type', 'text/plain');
});
Route::get('/pdf/tw-2023-6000', function () {
    return response()->download(storage_path('files/pdf/「全民共享普發現金」懶人包.pdf'));
});
