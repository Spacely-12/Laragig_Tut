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
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(10)
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

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'email' => 'required',
            'website' => ['required', Rule::unique('listings', 'website')],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);

   return redirect('/')->with('message', 'Listing Created Successfully');
//     }
// //show edit form
// public function edit(Listing $listing)
// {
//     return view('listings.edit', [
//         'listing' => $listing
//     ]);
// }

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
}