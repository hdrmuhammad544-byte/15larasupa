<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::get('/users', function (request $request) {
    return $request->user();
})->Middleware('auth:sanctum');

route::apiResource('users', UserController::class);