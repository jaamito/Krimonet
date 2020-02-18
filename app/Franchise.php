<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model{
    //
    public $timestamps = true;
    
    public function users(){
        return $this->belongsToMany(User::class, "user_id");
    }

    public function brands(){
        return $this->belongsToMany(Brand::class, "brand_id");
    }
}
