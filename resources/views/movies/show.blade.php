 @extends('app')

 @section('content')
 <div class="flex flex-col md:flex-row items-start gap-6">
     {{-- Gambar film --}}
     <div class="w-full md:w-1/3">
         <img src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" class="rounded-lg shadow-lg w-full">
     </div>

     {{-- Detail film --}}
     <div class="md:ml-8 w-full md:w-2/3">
         <h2 class="text-4xl font-bold mb-4">{{ $movie['title'] }}</h2>
         <p class="text-gray-400 text-lg mb-4">
             <span class="font-semibold text-white">Release Date:</span>
             {{ $movie['release_date'] }}
         </p>
         <p class="text-lg mb-4">{{ $movie['description'] }}</p>

         <h3 class="text-xl font-semibold mb-2">Cast</h3>
         <p class="text-gray-300 mb-4">
             @foreach ($movie['cast'] as $cast)
             {{ $cast }},
             @endforeach
         </p>

         <h3 class="text-xl font-semibold mb-2">Genres</h3>
         <p class="text-gray-300 mb-4">
             @foreach ($movie['genres'] as $genre)
             {{ $genre }},
             @endforeach
         </p>

         <div class="flex space-x-4 mt-6">
             <button class="bg-green-600 px-3 py-2 rounded hover:bg-green-500">✏️ Edit</button>
             <button class="bg-red-600 px-3 py-2 rounded hover:bg-red-500">🗑️ Delete</button>
         </div>
     </div>
 </div>
 @endsection