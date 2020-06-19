<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'phone' => $request->phone,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'social' => null,
        ];

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('logos');
            Storage::delete($listing->avatar);
        }

        if ($request->hasFile('cover_pic')) {
            $data['cover_pic'] = $request->file('cover_pic')->store('covers');
            Storage::delete($listing->cover_pic);
        }

        $listing->update($data);

        if(!empty($request->social_key)) {
            for ($i = 0; $i < count($request->social_key); $i++) {
                $listing->attributes()->updateOrCreate(
                    ['name' => $request->social_key[$i]],
                    ['name' => $request->social_key[$i], 'value' => $request->social_value[$i]]
                );
            }
        }

        $optionalAttributes = ['about', 'website', 'video'];
        foreach($optionalAttributes as $attr) {
            if (isset($request->{$attr})) {
                $listing->attributes()->updateOrCreate(
                    ['name' => $attr],
                    ['name' => $attr, 'value' => $request->{$attr}]
                );
            } else {
                $listing->attributes()->where('name', $attr)->delete();
            }
        }

        return back();
    }
    
    public function delete(Request $request, $id) {
        $listing = Listing::findOrFail($id);
        Storage::delete($listing->cover_pic);
        Storage::delete($listing->avatar);
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


        // $social_json = $this->socialJson($request);
        
        $data = [
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'latitude'      => $request->latitude,
            'longitude'     => $request->longitude,
            'avatar'        => $fAvatarName ?? null,
            'cover_pic'     => $fCoverName ?? null,
            'social'        => null
        ];

        $listing = Listing::create($data);

        for($i=0; $i < count($request->social_key); $i++) 
        {
            if(!empty($request->social_key[$i])) {
                $listing->attributes()->create(['name' => $request->social_key[$i], 'value' => $request->social_value[$i]]);
            }
        }

        $optionalAttributes = ['about', 'website', 'video'];
        foreach ($optionalAttributes as $attr) {
            if (isset($request->{$attr})) {
                $listing->attributes()->create(['name' => "{$attr}", 'value' => $request->{$attr}]);
            }
        }

        return back();
    }


}
