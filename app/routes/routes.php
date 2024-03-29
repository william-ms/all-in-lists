<?php

use app\library\routes\Route;
use app\controllers\site\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/search', [HomeController::class, 'store']);
