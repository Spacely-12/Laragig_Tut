<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//all listing
Route::get('/', [ListingController::class, 'index']);

//Show create forms
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listings data
Route::post('/listings', [ListingController::class, 'store']);


//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Edit Submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show register/create form
Route::get('/register', [UserController::class, 'create']);

//create a new user
Route::post('/users', [UserController::class, 'store']);

//Show login form
 Route::get('/login', [UserController::class, 'login']);
