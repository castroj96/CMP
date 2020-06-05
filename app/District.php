<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $table = 'districts';
    public $timestamps = false;

    public static function getDistrictsbyCanton($cantonId)
    {
        return District::where('canton', $cantonId)->pluck('name', 'id');
    }
}
