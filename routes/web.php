<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//all listing
Route::get('/', function () {
    return view('listings',
    [
        'heading' => 'Latest Listing',
        'listings' => Listing::all()
    ]);
});

// Single listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});


