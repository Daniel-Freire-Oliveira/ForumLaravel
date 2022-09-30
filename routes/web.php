<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page;

Route::get('/', [Page::class,'index'])->name('index');
Route::get('/forum', [Page::class,'forum'])->name('forum.index');
Route::get('/create/project', [Page::class,'createView']);
Route::post('/create',[Page::class,'create']);
Route::get('/info/{id}', [Page::class,'info'])->name('info.info');