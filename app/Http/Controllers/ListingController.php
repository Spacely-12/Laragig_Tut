<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;

class ListingController extends Controller
{

    //show all listing
    public function index()
    {
        // dd(request('tag'));
        return view(
            'listings.index',
            [
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->Paginate(8)
                //simplePaginate
            ]
        );
    }

    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create forms
    public function create()
    {
        return view('listings.create');
    }

    //store forms data
    public function store(Request $request)
    {
        // dd($request->file('logo')->store());
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);


        session()->flash('message');

        return redirect('/')->with('message', 'Listing Created Successfully');
    }
    //show edit form
    public function edit(Listing $listing)
    {
        dd($listing->title);
        return view('listings.edit', ['listing' => $listing]);
    }

    // //update listing
    // public function update(Request $request, Listing $listing)
    // {
    //     $formFields = $request->validate([
    //         'title' => 'required',
    //         'company' => ['required', Rule::unique('listings', 'company')->ignore($listing->id)],
    //         'location' => 'required',
    //         'email' => 'required',
    //         'website' => ['required', Rule::unique('listings', 'website')->ignore($listing->id)],
    //         'tags' => 'required',
    //         'description' => 'required'
    //     ]);

    //     $listing->update($formFields);

    //     return redirect('/')->with('status', 'Listing Updated Successfully');
    // }

    // //delete listing
    // public function destroy(Listing $listing)
    // {
    //     $listing->delete();

    //     return redirect('/')->with('status', 'Listing Deleted Successfully');
    // }
}
