@extends('layout')
@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">
        {{$listings['title']}}
    </h2>
    <h1 class="text-lg text-gray-600 mb-2">
        <span class="font-medium">Email:</span> {{$listing['email']}}
    </h1>
    <h2 class="text-sm text-gray-500 mb-2">
        <span class="font-medium">Tags:</span> {{$listing['tags']}}
    </h2>
    <h2 class="text-2xl text-gray-700 mb-2">
        {{$listing['heading']}}
    </h2>
    <h2 class="text-xl text-gray-700 mb-2">
        <span class="font-medium">Company:</span> {{$listing['company']}}
    </h2>
    <h2 class="text-lg text-gray-600 mb-2">
        <span class="font-medium">Location:</span> {{$listing['location']}}
    </h2>
    <h2 class="text-lg text-indigo-600 mb-4">
        {{$listing['website']}} 
    </h2>
    <p class="text-gray-700 leading-relaxed">
        {{$listing['description']}}
    </p>
</div>
@endsection
