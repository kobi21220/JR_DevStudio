<?php

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

