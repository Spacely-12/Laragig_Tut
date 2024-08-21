<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
   
     //show all listing
     public function index(){
        // dd(request('tag'));
        return view('listings.index',
            [
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
            ]);
    }

    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

     //show create forms
      public function create() {
        return view('listings.create');
    }  

    public function store(Request $request){
    //    dd($request->all());
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'email' => 'required','email',
            'website' => ['required', Rule::unique('listings', 'website')],
            'tags' => 'required',
            'description' => 'required'
        ]);
        return redirect('/');
    }
}
