<?php

use App\Http\Controllers\JobsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', [JobsController::class, 'index']);
Route::get('/jobs/create', [JobsController::class, 'create']);
Route::post('/jobs', [JobsController::class, 'store']);











Route::get('/jobs/{job}', [JobsController::class, 'show']);


// index - show all in db,
// show - show one single in db,
// create - show form to create new ,
// store - store new to db,
// edit - show form to edit ,
// update - update db,
// destroy - delete from db 