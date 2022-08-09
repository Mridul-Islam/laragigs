<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//Find all listings
Route::get('/', [ListingController::class, 'index']);

// Find single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

