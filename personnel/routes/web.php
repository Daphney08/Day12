<?php

use Illuminate\Support\Facades\Route;

Route::get('/1', [
    App\Http\Controllers\PersonnelController::class,
    'simple_query'
]);

Route::get('/2', [
    App\Http\Controllers\PersonnelController::class,
    'select'
]);

Route::get('/3', [
    App\Http\Controllers\PersonnelController::class,
    'find'
]);

Route::get('/4', [
    App\Http\Controllers\PersonnelController::class,
    'count'
]);

Route::get('/5', [
    App\Http\Controllers\StatisticsController::class,
    'avg'
]);

Route::get('/6', [
    App\Http\Controllers\PersonnelController::class,
    'exists'
]);

Route::get('/7', [
    App\Http\Controllers\PersonnelController::class,
    'where'
]);

Route::get('/8', [
    App\Http\Controllers\PersonnelController::class,
    'orwhere'
]);

Route::get('/9', [
    App\Http\Controllers\StatisticsController::class,
    'wherebetween'
]);

Route::get('/10', [
    App\Http\Controllers\StatisticsController::class,
    'wherein'
]);

Route::get('/11', [
    App\Http\Controllers\PersonnelController::class,
    'wherenull'
]);
