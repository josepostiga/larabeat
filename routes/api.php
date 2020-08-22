<?php

use Illuminate\Support\Facades\Route;
use JosePostiga\Larabeat\Http\Controllers\HealthCheckController;

Route::get('health-check', HealthCheckController::class);
