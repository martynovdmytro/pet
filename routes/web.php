<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register default data for application template.
|
*/

Route::view('/{any}', 'index', [
    'categories' => CategoryController::index()
])->where('any', '(.*)');

