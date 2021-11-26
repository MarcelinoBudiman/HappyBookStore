<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Details;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function home(){
        $bookData = Books::simplePaginate(5);
        $categoryData = DB::table('categories')->get();
        return view('home', [
            'bookData' => $bookData,
            'categoryData' => $categoryData

        ]);
    }

    public function categoryView($idCategory){
        $bookData = Books::where('category_id', "LIKE", "%$idCategory%")->paginate(5);
        $categoryData = DB::table('categories')->get();
        $categoryLayout = Categories::where('id', "LIKE", "%$idCategory%")->get();
        return view('category', [
            'bookData' => $bookData,
            'categoryData' => $categoryData,
            'categoryLayout' => $categoryLayout
        ]);
    }

    public function details($id){
        $bookData = Books::where('id', "LIKE", "%$id%")->get();
        $categoryData = DB::table('categories')->get();
        return view('details', [
            'bookData' => $bookData,
            'categoryData' => $categoryData
        ]);
    }

    public function contact(){
        $bookData = Books::simplePaginate(5);
        $categoryData = DB::table('categories')->get();
        return view('contact', [
            'bookData' => $bookData,
            'categoryData' => $categoryData

        ]);
    }
}
