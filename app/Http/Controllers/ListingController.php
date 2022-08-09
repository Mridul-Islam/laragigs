<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        dd(request()->tag);
        $listings = Listing::all();
        return view('listings.index', [
            'listings' => $listings 
        ]);
    }

    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }  

} //End of ListingController class 
