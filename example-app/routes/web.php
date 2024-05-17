<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/baru', function () {
    echo "hello world";
});

route::get('bismillah', [HomeControler::class, 'index'])->name('bismillah');
route::get('view', [HomeControler::class, 'LewatView'])->name('view');