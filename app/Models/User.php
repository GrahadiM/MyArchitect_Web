<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'role_id',
        'status_id',
        'email',
        'password',
        'url_avatar',
        'phone',
        'city',
        'address',
        'desc',
        'gender_id',
        'created_at',
        'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }
    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }
    public function portofolio()
    {
        return $this->belongsTo('App\Models\Portofolio');
    }
    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
