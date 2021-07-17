<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'user_id',
        'portofolio_id',
        'price_id',
        'wa',
        'area',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function portofolio()
    {
        return $this->belongsTo('App\Models\Portofolio');
    }
    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }
}
