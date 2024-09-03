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


//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Edit Submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update']);


// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);