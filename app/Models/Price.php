<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';
    protected $fillable = ['user_id', 'name', 'price', 'desc'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function portofolio()
    {
        return $this->belongsTo('App\Models\Portofolio');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
