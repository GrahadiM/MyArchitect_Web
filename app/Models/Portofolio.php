<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = 'portofolio';
    protected $fillable = ['project', 'user_id', 'category_type_id', 'category_model_id', 'url_image', 'url_video', 'luasbangunan', 'desc'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function category_type()
    {
        return $this->belongsTo('App\Models\CategoryType');
    }
    public function category_model()
    {
        return $this->belongsTo('App\Models\CategoryModel');
    }
}
