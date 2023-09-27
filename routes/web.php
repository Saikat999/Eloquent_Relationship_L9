<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EloquentController;



//For One to One relatioship
Route::get('/', [EloquentController::class, 'onetoone']);

//For One to Many relatioship
Route::get('/onetomany', [EloquentController::class, 'onetomany']);

//For Many to Many relatioship
Route::get('/manytomany', [EloquentController::class, 'manytomany']);

//For Has One Through Relationship
Route::get('/hasonethrough',[EloquentController::class,'hasonethrough']);
