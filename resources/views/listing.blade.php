@extends('layout')
@section('content')
@include('partials/_back')
@include('partials/_search')


<div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">
        {{$listing['title']}}
    </h2>
    <h1 class="text-lg text-gray-600 mb-2">
        <span class="font-medium">Email:</span> {{$listing['email']}}
    </h1>
    
</div>
@endsection
