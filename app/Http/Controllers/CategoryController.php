<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        //cara pemangilan data base
        // $category = DB::table('categories')->get();
        
        // $category = DB::table('categories')->select('id','name')->get();

        // $category = DB::table('categories')->whereIn('id',[1, 3, 5])->get();
        // $category = DB::table('categories')->where('id',[1])->get();
        // $category = DB::table('categories')->where('id',[1])->first();
        // $category = DB::table('categories')
        // ->where('id',[5])
        // ->select('id','name','slug')->first();


        //pangil database mengunakan model

        $categories = Category::all();
        // $categories = Category::select(['id','name','slug'])->get();
        // $categories = Category::whereIn('id',['1','3','5'])
        // ->select('id','name','slug')
        // ->get();


        return $categories;
    }


    public function store(Request $request){
      
    // store berfunsi untuk insert data dari client
        
       // $category = DB::table('categories')->insert([
        //     'name' => $request['name'],
        //     'slug' => Str::of($request['name'])->slug('-'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $categories = DB::table('categories')->insert([
        //     ['name' => 'Drama Indo','slug'=>Str::of('Drama Indo')->slug('-')],
        //     ['name' => 'Drama Korea','slug'=>Str::of('Drama Korea')->slug('-')],
        //     ['name' => 'Drama Jepang','slug'=>Str::of('Drama Jepang')->slug('-')],

        // ]);

        //cara ke 2
        // $category = new Category();

        // $category->name = $request['name'];
        // $category->slug = Str::of($request['name'])->slug('-');

        // $category->save();

        //cara ke 3
        // $category = Category::create([
        //     'name' => $request['name'],
        // 'slug' => Str::of($request['name'])->slug('-'),
        // ]);


        // return $category;

        //cara ke 4 dengan mengunkan model
        $categories = Category::insert([
             ['name' => 'Drama wmx','slug'=>Str::of('Drama Wmx')->slug('-')],
           ['name' => 'Drama jprx','slug'=>Str::of('Drama jprx')->slug('-')],
             ['name' => 'Drama NBX','slug'=>Str::of('Drama NBX')->slug('-')], 
        ]);

        return $categories;

    }
    
    public function update(Request $request, $id){
        $category = DB::table('categories')->where('id', $id)->update([
            'name' => $request['name'],
            'slug' => Str::of($request['name'])->slug('-'),
            'updated_at' => now(),
        ]);

        return $category;
    }
}
