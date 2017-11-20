<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Customer;

class SclRecord extends Model
{

    protected $guarded = ['id'];

    public function customer(){
        
        return $this->belongsTo('App\Customer');
    }
}
