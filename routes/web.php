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

Route::view('/{any?}', 'index', [
    'category' => CategoryController::index()
]);

Route::view('/admin/admin/{any?}', 'admin', [
    // TODO: отредактировать линк
//    'category' => CategoryController::index()
]);
