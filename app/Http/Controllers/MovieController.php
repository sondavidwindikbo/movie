<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Routing\Controllers\HasMiddleware;
use illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\IdentityMarshaller;

class MovieController extends Controller
{
    public $movies;

    public function __construct()
    {
        for($i = 0; $i < 10; $i++){
            $this->movies[] = [
                'title' => 'movie Controller' . $i,
                'year' => '2022',
                'genre' => "Action",
            ];
        }
    }

    // public static function middleware()
    // {
    //     // return [
    //     //     'isAuth',
    //     //     new Middleware('isMember', only: ['show']),

    //     // ];
    // }

    public function index()
    {

        // return response()->json([
        //     'movies' => $this->movies,
        //     'message' => 'List of movies'
        // ], 201);

        $movies = $this->movies;

        // return view('movies.index',['filems' => $movies]);
        // return view('movies.index', compact('movies'));
        // return view('movies.index', with([

        //     'movies' => $movies

        // ]));

        return view('movies.index', compact('movies'))->with([
            'titlePage' => 'Movie List'
        ]);
    
    }

    public function show($id) 

    {
    
        $movie = $this->movies[$id];
        return view('movies.show', ['movie' => $movie]);
    }

    public function store()
    {
        $this->movies[] = [
            'title' => request('title'),
            'year'  => request('year'),
            'genre' => request('genre'),
        ];
        
         return $this->movies;
    }

    public function update( Request $request, $id)
    {
        $this->movies[$id]['title'] = request('title');
        $this->movies[$id]['year'] = request('year');
        $this->movies[$id]['genre'] = request('genre');
    
       return $this->movies;

        return $request->all();

        dd($user);

    }


    public function destroy($id)
    {
        unset($this->movies[$id]);

        return $this->movies;

    }




}


