 <?php

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\MovieController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Response;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/utama', function () {
        return view('utama');
    });

    Route::get('/home', function () {
        return view('home');
    });



    $movies = [];




    Route::group(
        [
            // 'middleware' => ['isAuth'],
            'prefix' => 'movie',
            'as' => 'movie.',

        ],
        function () {

            Route::get('/', [MovieController::class, 'index'])->name('index');
            Route::get('/create', [MovieController::class, 'create'])->name('create');
            Route::get('/{id}', [MovieController::class, 'show'])->name('show');
            Route::post('/', [MovieController::class, 'store'])->name('store');
             Route::get('/{id}/edit', [MovieController::class, 'edit'])->name('edit');
            Route::put('/{id}', [MovieController::class, 'update'])->name('update');
            Route::patch('/{id}', [MovieController::class, 'update']);
            Route::delete('/{id}', [MovieController::class, 'destroy']);
        }
    );

    Route::get('/pricing', function () {
        return 'Please, buy a membeship';
    });


    Route::get('/login', function () {
        return 'Login Page';
    })->name('login');


    Route::post('/request', function (Request $request) {

        // if($request->hasAny(['email','password'])) {
        //     return 'Login berhasil. Ok';
        // }

        $request->merge(['email' => 'whin@gmail.com']);

        if ($request->missing('email')) {
            return 'emailnya tidak ada ';
        } else {
            return 'datanya ada';
        }

        return 'Gagal';
    });


    Route::get('/response', function () {
        return response('OK')->header('Content-Type', 'text/plain');
    });


    Route::get('cache-control', function () {

        return Response::make('page allow to cache', 200)
            ->header('cache-Control', 'public, max-age=86400');
    });

    Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {


        // Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::get('/dashboard', function () {
            $user = 'admin';

            return response('login succesfully', 200)->cookie('user', $user);
        });

        Route::get('/logout', function () {
            return redirect()->action([HomeController::class, 'index'], ['authenticated' => false]);
        });

        Route::get('/privacy', function () {
            return 'Privacy page';
        });

        Route::get('/terms', function () {
            return 'Terms page';
        });
    });


    Route::get('/external', function () {
        return redirect('/');
    });

    // Route::get('/home', function(){
    //     return view('home');
    // });

    Route::get('/response', function () {
        return response('OK')->header('Content-Type', 'text/plain');
    });


    Route::get('/cache-control', function () {
        return Response::make('pages allow to cache', 200)
            ->header('Cache-Control', 'public, max-age=86400');
    });


    Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {

        // Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::get('/dashboard', function () {

            $user = 'admin';

            return response('login succesfully', 200)->cookie('user', $user);
        });

        Route::get('/logout', function () {
            return redirect()->action([HomeController::class, 'index'], ['authenticated' => false]);
        });


        Route::get('/privacy', function () {
            return 'Privacy pages';
        });

        Route::get('/terms', function () {
            return 'Term Pages';
        });
    });


    Route::get('/external', function () {

        return redirect('/');
    });
