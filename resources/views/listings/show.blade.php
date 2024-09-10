<x-layout>
    @include('partials/_back')
    @include('partials/_search')

    <div class="mx-4">
        <x-card class="p-40">
            <div class="flex flex-col items-center justify-center text-center text-white">
                <img class="w-48 mr-6 mb-6 rounded-md bg-[#0a1931] shadow-md" src="{{$listing->logo ? asset ('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                alt="No image available" />

                <h3 class="text-3xl font-bold mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-semibold mb-4 text-[#82a4d9]">{{ $listing->company }}</div>

                <x-listing-tags :tagsCsv="$listing->tags" />

                <div class="text-lg my-4 text-[#82a4d9]">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-[#162a4a] w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4 text-[#82a4d9]">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p class="text-[#b1c3de]">
                            {{ $listing->description }}
                        </p>
                        <a href="mailto:{{ $listing->email }}"
                            class="block bg-[#1c3b72] text-white mt-6 py-2 rounded-xl hover:opacity-90 shadow-sm transition-opacity duration-200"><i
                                class="fa-solid fa-envelope"></i> Contact Employer</a>

                        <a href="{{ $listing->website }}" target="_blank"
                            class="block bg-[#0a1931] text-white py-2 rounded-xl hover:opacity-90 shadow-sm transition-opacity duration-200"><i
                                class="fa-solid fa-globe"></i> Visit Website</a>
                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit</a>

                <form method="POST" action="/listings/{{$listing->id}}" >
                     @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> DELETE</button>
            </form>
               
        </x-card>
    </div>
</x-layout>