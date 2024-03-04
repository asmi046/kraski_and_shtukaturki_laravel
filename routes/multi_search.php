<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiSearchController;

Route::get('/multi_search', [MultiSearchController::class, "index"])->name('multi_search');
