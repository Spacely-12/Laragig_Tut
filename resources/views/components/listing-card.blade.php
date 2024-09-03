@props(['listing'])
<x-card>

    <img class="hidden w-48 mr-6 md:block rounded-lg bg-[#0a1931] shadow-md" 
    src="{{$listing->logo ? asset ('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
        alt="No image available" />
    <div>
        <h3 class="text-2xl font-semibold text-[#b1c3de]">
            <a href="/listings/{{ $listing->id }}">{{ $listing->company }}</a>
            <x-listing-tags :tagsCsv="$listing->tags" />
        </h3>
        
        <div class="text-xl font-bold mb-4 text-[#82a4d9]">{{ $listing->title }}</div>
        
        <div class="text-lg mt-4 text-[#b1c3de]">
            <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
        </div>
    </div>

</x-card>
