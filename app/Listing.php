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
        return $this->attributes()->where('name', 'website')->first()->value ?? null;
    }

    public function getEmailAttribute() {
        return $this->attributes()->where('name', 'email')->first()->value ?? null;
    }

    public function getFacebookAttribute() {
        return $this->attributes()->where('name', 'fb')->first()->value ?? null;
    }

    public function getInstagramAttribute() {
        return $this->attributes()->where('name', 'instagram')->first()->value ?? null;
    }

    public function getTwitterAttribute() {
        return $this->attributes()->where('name', 'twitter')->first()->value ?? null;
    }

    public function getVideoAttribute() {
        return $this->attributes()->where('name', 'video')->first();
    }

    public function getPhone2Attribute() {
        return $this->attributes()->where('name', 'phone2')->first();
    }

    public function getPhone3Attribute() {
        return $this->attributes()->where('name', 'phone3')->first();
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
