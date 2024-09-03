<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//all listing
Route::get('/', [ListingController::class, 'index']);

//Show create forms
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listings data
Route::post('/listings', [ListingController::class, 'store']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
