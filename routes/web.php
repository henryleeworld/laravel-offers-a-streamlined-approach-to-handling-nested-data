<?php

use App\Http\Controllers\CharactersController;
use Illuminate\Support\Facades\Route;

Route::get('characters/', [CharactersController::class, 'index']);
