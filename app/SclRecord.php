<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Customer;

class SclRecord extends Model
{

    protected $fillable = ['history','visit_date', 'customer_id'];

    public function customer(){
        
        return $this->belongsTo('App\Customer');
    }
}
