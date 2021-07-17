<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    use HasFactory;
    protected $table = 'termins';
    protected $fillable = ['name', 'image', 'note'];
    public function progres()
    {
        return $this->belongsTo('App\Models\Progres');
    }
}
