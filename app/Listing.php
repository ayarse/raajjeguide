<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    // protected $casts = [
    //     'social' => 'array'
    // ];
    protected $guarded = ['created_at', 'updated_at'];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function getSocialAttribute($value) {
        if($value) {
            $socials = json_decode($value, true)["socials"];
            $newsocial = array();
            $class = function ($s) {
                if ($s == "fb") {
                    return 'fab fa-facebook-f';
                }

                if ($s == "twitter") {
                    return 'fab fa-twitter';
                }

                if ($s == "website") {
                    return 'fa fa-link';
                }

                if ($s == "instagram") {
                    return 'fab fa-instagram';
                }

                return '';
            };
            foreach($socials as $social) {                 
                    $newsocial[] = [
                        "key" => $social["key"],
                        "value" => $social["value"],
                        "class" => $class($social["key"]),
                    ];
            }
            // dd($newsocial);
            return $newsocial;
        }
        return false;
    }
}
