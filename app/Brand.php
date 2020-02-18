<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model{
    //
    public $timestamps = true;
    
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function franchises(){
        return $this->belongsToMany(Franchise::class, "brand_id");
    }
}
