@props(['listing'])

<x-card>
  <div class="flex">
    <!-- Company Logo -->
    <img 
      class="hidden w-48 mr-6 md:block" 
      src="{{asset('images/laravel-filled.svg')}}" 
      alt=""/>

    <div>
      <!-- Job Title -->
      <h2 class="text-2xl">
        <a href="/listings/{{$listing->id}}" class="hover:underline">{{ $listing->title }}</a>
      </h2>

      <!-- Company Name -->
      <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>

      <!-- Tags -->
      <x-listing-tags :tagsCsv="$listing->tags" />

      <!-- Location -->
      <div class="text-lg mt-4 flex items-center">
        <i class="fa-solid fa-location-dot mr-2"></i> 
        {{ $listing->location }}
      </div>
    </div>
  </div>
</x-card>