<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    
    protected $table ='products';
    public $timestamps = false;

    public function categories(){
        return $this->hasOne('App\categories', 'id_category', 'id');
    }
    
}
