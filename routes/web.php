<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings', [
        'header' => 'Listing new items',
        'listings' => Listing::all()
    ]);
});

// Find single listing
Route::get('/listing/{listing}', function(Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);
});

