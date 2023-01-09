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
        'name', 'email', 'password', 'postcode', 'address', 'b_year', 'b_month', 'b_day', 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carts() {
        return $this->hasMany('App\Models\Cart');
    }

    public function favorites() {
        return $this->hasMany('App\Models\Favorite');
    }

    public function delivery_addresses() {
        return $this->hasMany('App\Models\DeliveryAddress');
    }

    public function payments() {
        return $this->hasMany('App\Models\Payment');
    }



}
