@extends('app')

@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <h2 class="text-2xl font-bold mb-6">Add Movie</h2>
    <form class="space-y-6" action="{{route('movie.store')}}" method="POST">
        @csrf
        <div>
            <label for="title" class="black text-lg mb-2">Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 bg-gray-800 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('title')border-red-500 @enderror ">
            @error('title')
                <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description" class="black text-lg mb-2">description</label>
            <input type="text" name="description" id="description" class="w-full p-2 bg-gray-800 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('description')border-red-500 @enderror ">
            @error('description')
            <p class="text-red-500">{{ $message}}</p>
            @enderror
        </div>
        <div>
            <label for="release_date" class="black text-lg mb-2">Release Date</label>
            <input type="text" name="release_date" id="release_date" class="w-full p-2 bg-gray-800 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('release_date')border-red-500 @enderror ">
            @error('release_date')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="cast" class="black text-lg mb-2">Cast</label>
            <input type="text" name="cast" id="cast" class="w-full p-2 bg-gray-800 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('cast')border-red-500 @enderror ">
            @error('cast')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="genres" class="black text-lg mb-2">Genres</label>
            <input type="text" name="genres" id="genres" class="w-full p-2 bg-gray-800 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('genres')border-red-500 @enderror  ">
             @error('genres')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="image" class="black text-lg mb-2">Poster</label>
            <input type="text" name="image" id="image" class="w-full p-2 bg-gray-800 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 @error('image')border-red-500 @enderror ">
        </div>
         @error('image')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        <div>
            <button type="submit" class="bg-blue-600 px-6 py-2 rounded hover:bg-blue-500">Save</button>
        </div>
    </form>
</div>
@endsection