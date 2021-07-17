<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'category_model';
    protected $fillable = [
    'title',
    'slug',
   ];
   public function sluggable()
   {
       return [
           'slug' => [
               'source' => 'title'
           ]
       ];
   }
   
   public function portofolio()
   {
       return $this->hasMany('App\Models\Portofolio');
   }
   public function order()
   {
       return $this->hasMany('App\Models\Order');
   }
}
