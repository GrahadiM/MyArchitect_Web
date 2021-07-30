<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = [
        'user_id',
        'portofolio_id',
        'order_id',
        'comment',
        'star',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function portofolio()
    {
        return $this->belongsTo('App\Models\Portofolio');
    }
}
