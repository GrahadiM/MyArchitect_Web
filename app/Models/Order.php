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
        'luas_lahan'
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

    // public function progres()
    // {
    //     return $this->belongsTo('App\Models\Progres');
    // }

    public function progres(){
        return $this->hasMany('App\Models\Progres');
    }

    public function getProgresakhirAttribute(){
      return count($this->progres) > 0  ? collect($this->progres)->sortByDesc('id')->first() : "{}";
    }


}
