<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>

    <ul>
        @foreach($menu as $key => $value)
        <li><a href="{{ $value }}">{{ $key }}</a></li>
        @endforeach
    </ul>

    <h1>Home page</h1>
    <ul>
        <!-- @for($index = 0; $index < count($movies); $index++)
            <li>{{$movies[$index]['title'] }} - {{$movies[$index]['year']}}</li>
            @endfor -->

        @forelse ( $movies as $movie)
        <li>{{$movie['title'] }} - {{$movie['year']}}</li>
        @empty
        <li>No movies found</li>
        @endforelse
    </ul>


</body>

</html>