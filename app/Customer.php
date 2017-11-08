<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\SclRecord;

class Customer extends Model
{
    protected $fillable = ['name', 'ic', 'phone1', 'phone2', 'phone3'];
          


    public function sclrecords()
    {
        return $this->hasMany('App\SclRecord');
    }

}