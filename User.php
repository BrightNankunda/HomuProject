<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */ 
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function products() 
    {
        return $this->hasMany('App\Models\Image');
    }

    public function Officialpost()
    {
        return $this->hasOne('App\Models\Officialpost');
    }

    public function Clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function methods()
    {
        return $this->hasOne('App\Models\methods');
    }
    public function pic()
    {
        return $this->hasOne('App\Models\Pic');
    }
}
