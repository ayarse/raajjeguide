<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    protected $guarded = ['created_at', 'updated_at'];

    public function attributes()
    {
        return $this->hasMany('App\Attribute');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function getSocialsAttribute() {
        return $this->attributes()
        ->where(function($query) {
        $query->where('name', 'twitter')
                ->orWhere('name', 'instagram')
                ->orWhere('name', 'fb');
        })->where('value', '!=', '')
        ->get();

    }

    public function getWebsiteAttribute() {
        return $this->attributes()->where('name', 'website')->first();
    }

    public function getVideoAttribute() {
        return $this->attributes()->where('name', 'video')->first();
    }

    public function socialClass($value) {
        switch($value) {
            case 'fb':
                return 'fab fa-facebook-f';
                break;
            case 'twitter':
                return 'fab fa-twitter';
                break;
            case 'instagram':
                return 'fab fa-instagram';
                break;
            case 'website':
                return 'fa fa-link';
                break;
            default:
                return 'fa fa-link';
                break;
        }
    }

}
