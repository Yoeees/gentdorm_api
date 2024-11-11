<?php

use App\Http\Controllers\BoarderLogHistoriesController;
use App\Http\Controllers\BoardersController;
use App\Http\Controllers\VisitorLogHistoriesController;
use App\Http\Controllers\VisitorsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/boarders', BoardersController::class);
Route::apiResource('/visitors', VisitorsController::class);
Route::apiResource('/boarderloghistories', BoarderLogHistoriesController::class);
Route::apiResource('/visitorloghistores',VisitorLogHistoriesController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
