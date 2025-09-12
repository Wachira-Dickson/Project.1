@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')


<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($listings) == 0)
@foreach($listings as $listing)
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
  <div class="flex">
    <!-- Company Logo -->
    <img 
      class="hidden w-48 mr-6 md:block" 
      src="{{asset('images/laravel-filled.svg')}}" 
      alt="Company Logo"
    />

    <div>
      <!-- Job Title -->
      <h2 class="text-2xl">
        <a href="/listings/{{$listing->id}}" class="hover:underline">{{ $listing->title }}</a>
      </h2>

      <!-- Company Name -->
      <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>

      <!-- Tags -->
      <ul class="flex flex-wrap">
        <li>
          <a href="#" 
             class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs">
            Laravel
          </a>
        </li>
        <li>
          <a href="#" 
             class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs">
            API
          </a>
        </li>
        <li>
          <a href="#" 
             class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs">
            Backend
          </a>
        </li>
        <li>
          <a href="#" 
             class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs">
            Vue
          </a>
        </li>
      </ul>

      <!-- Location -->
      <div class="text-lg mt-4 flex items-center">
        <i class="fa-solid fa-location-dot mr-2"></i> 
        {{ $listing->location }}
      </div>
    </div>
  </div>
</div>

@endforeach
    
@else
    <p>No listings found</p>
@endunless

</div>

@endsection
