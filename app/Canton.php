<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    //
    protected $table = 'cantons';
    public $timestamps = false;

    public static function getCantonsByProvince($provinceId)
    {
        return Canton::where('prov', $provinceId)->pluck('name','id');
    }
}
