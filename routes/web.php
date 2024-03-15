<?php

use Illuminate\Support\Facades\Route;  
use akis\slug\Http\Controllers\SlugController;





Route::get('/slug-generate', [SlugController::class, 'index']);
