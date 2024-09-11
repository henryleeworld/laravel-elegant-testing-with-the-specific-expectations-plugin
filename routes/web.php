<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response('', 200)->header('Content-Type', 'text/plain');
});
Route::get('/pdf/tw-2024-sudan-red-measures', function () {
    return response()->download(storage_path('files/pdf/「蘇丹紅事件因應及強化措施報告」懶人包.pdf'));
});
