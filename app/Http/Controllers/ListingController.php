<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

// Common Resource Routes:
// index Show all listings
// show - Show single listing
 // create Show form to create new listing
// store - Store new listing I
// edit - Show form to edit listing
// update Update listing
// destroy - Delete listing

class ListingController extends Controller
{
    public function index(){
        return view('listings.index',[
            'listings' => Listing::all()
        ]);
    }

    public function show(Listing $id){
        dd();
        return view('listings.show', [
            'listings' => Listing::find($id)
        ]);
    }
}
