<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'gender';
    protected $fillable = ['name'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
