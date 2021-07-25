<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;
    protected $table = 'progres';
    protected $fillable = ['user_id', 'order_id', 'name', 'image', 'note'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
