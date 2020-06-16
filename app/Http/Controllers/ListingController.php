<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ListingController extends Controller
{
    protected $rules = [
            'title' => 'required|max:255',
            "category_id" => "required",
            "phone" => 'required',
            // "website" => '',
            "address" => 'max:255',
            "latitude" => "numeric",
            "longitude" => "numeric",
            "avatar" => 'image|dimensions:min_width=100,min_height=100',
            "cover_pic" => 'image|dimensions:min_width=550,min_height=297',
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function redirectTo($request)
    {
        return route('home');
    }

    public function add(){
        $categories = Category::all();
        return view('addlisting', compact('categories'));
    }

    public function edit(){
        $categories = Category::all();
        $id = Route::current()->parameter('id');
        $listing = null;
        if(!empty($id))
        {
            $listing = Listing::findOrFail($id);
        }
        return view('addlisting', compact('categories', 'listing'));
    }

    public function update(Request $request) {
        $validatedData = $request->validate($this->rules);
        $listing = Listing::find($request->listing_id);

        $social_json = $this->socialJson($request);

        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'phone' => $request->phone,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'social' => $social_json,
        ];

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('logos');
        }

        if ($request->hasFile('cover_pic')) {
            $data['cover_pic'] = $request->file('cover_pic')->store('covers');
        }

        $listing->update($data);

        return back();
    }
    
    public function delete(Request $request, $id) {
        $listing = Listing::findOrFail($id);
        $listing->delete();
        return redirect('add');
    }

    public function store(Request $request) {
        // dd($request->input());
        $validatedData = $request->validate($this->rules);

        if($request->hasFile('avatar')) {
            $fAvatarName = $request->file('avatar')->store('logos');
        }

        if($request->hasFile('cover_pic')) {
            $fCoverName = $request->file('cover_pic')->store('covers');
        }


        $social_json = $this->socialJson($request);
        
        $data = [
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'latitude'      => $request->latitude,
            'longitude'     => $request->longitude,
            'avatar'        => $fAvatarName ?? null,
            'cover_pic'     => $fCoverName ?? null,
            'social'        => $social_json
        ];

        Listing::create($data);

        return back();
    }

    protected function socialJson(Request $request)
    {
        $json = [
            "socials" => [],
        ];
        for ($i = 0; $i < count($request->social_key); $i++) {
            if (!empty($request->social_value[$i])) {
                $json["socials"][] = ["key" => $request->social_key[$i], "value" => $request->social_value[$i]];
            }
        }
        if (!empty($request->website)) {
            $json["socials"][] = ['key' => 'website', 'value' => $request->website];
        }
        return json_encode($json);
    }
}
