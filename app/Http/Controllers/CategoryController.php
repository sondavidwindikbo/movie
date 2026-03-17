<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // $categories = Category::all();
        // $categories = Category::select(['id','name','slug'])->get();
        $categories = Category::whereIn('id',['1','3','5'])
        ->select('id','name','slug')
        ->get();


        return $categories;
    }

    
}
