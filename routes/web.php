<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'Index'])->name('home');
