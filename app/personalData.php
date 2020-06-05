<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalData extends Model
{
    //
    protected $table = 'personalData';
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'userId'];
    protected $fillable = ['provinceId', 'cantonId', 'districtId', 'address', 'phoneNumber'];

}
