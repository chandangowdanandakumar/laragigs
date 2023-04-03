<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\List_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//all Listing can be fetched by crating a model for all 
Route::get('/', function () {
    return view('listings',[
    'heading' => 'Latest Listings',
    'listings' => Listing::all()
    ]);
});


//single listing
Route::get('/listings/{id}', function($id){
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});

/*

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});


Route::get('/posts/{id}', function ($id) {
    // dd($id);
    // helper method - dd,  dump and die
    // helper method - ddd, dump, die, debug
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return $request->name.' '.$request->city;
    // parameters in url can be debug in query
    // example - http://laragigs.test/search?name=chandan&city=bangalore
});

*/