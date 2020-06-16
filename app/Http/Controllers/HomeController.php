<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $catId = Route::current()->parameter('category_id');
        $singleCategory = null;
        $homePage = true;
        if($catId) {
            $listings = Listing::where('category_id', $catId)->orderBy('id', 'DESC')->get();
            $singleCategory = Category::find($catId);
            $homePage = false;
        } else {
            $listings = Listing::orderBy('id', 'DESC')->paginate(20);
        }
        // dd(request()->cookie('favorites'));
        $favArray = null;
        try {
            $favArray = explode("," , (request()->cookie('favorites')));
        } catch (\Throwable $e) {
            $favArray = null;
        }
        
        $favorites = $listings->filter(function($item) use ($favArray) {
            return in_array($item->id, $favArray);
        });
        return view('index', compact('categories', 'listings', 'singleCategory', 'homePage', 'favorites'));
    }

    public function search(Request $request)
    {
        $keywords = $request->input('s');
        $search_category = $request->input('search_category');
        $categories = Category::all();
        $where = [
            ['title', 'like', "%{$keywords}%"]
        ];
        if($search_category !== null) {
            $where[] = ['category_id', '=', "{$search_category}"];
        }
        $listings = Listing::where($where)->get();
        return view('index', compact('categories', 'listings'));

    }

}
