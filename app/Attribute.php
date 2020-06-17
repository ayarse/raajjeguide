<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name', 'value'];
    //
    public function listing()
    {
        return $this->belongsTo('App\Listing');
    }
}
