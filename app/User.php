<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'user_email', 'user_password','user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword(){
        return $this->user_password;
    }
	
    public function stores(){
        return $this->belongsToMany(Store::class);
    }
	
	public function franchises(){
        //return $this->belongsToMany(Franchise::class);
		return $this->belongsToMany("App\Franchise");//->using('App\UserFranchise');
    }

	public function brands(){
        //return $this->belongsToMany(Franchise::class);
		return $this->belongsToMany("App\Brand");//->using('App\UserFranchise');
    }
}
