<x-layout>
    {{-- @include('partials/_back') --}}
    @include('/partials/_hero')
    @include('/partials/_search')

    <div class="bg-white p-4"> <!-- This div wraps the entire content and sets the background -->
        <div class="flex justify-center -mt-2">
            {{-- <h1 class="text-3xl mt-3 font-bold text-[#82a4d9]">{{ $heading }}</h1> --}}
        </div>

        <div class="lg:grid lg:grid-cols-2 gap-6 space-y-4 md:space-y-0 mx-4 mt-4">
            @unless (count($listings) == 0)
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing"/>
                @endforeach
            @else
                <p class="text-center text-[#b1c3de]">No Listings Found</p>
            @endunless
        </div>
    </div>
</x-layout>