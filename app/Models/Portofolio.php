<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Price;
class Portofolio extends Model
{
    use HasFactory;
    // protected $append = ['category_type_name','category_model_name','author'];
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

    public function getTitleAttribute(){
      return $this->project;
    }

    public function getAuthorAttribute(){
      return $this->user->name;
    }

    public function getCategoryTypeNameAttribute(){
      return $this->category_type->title;
    }

    public function getCategoryModelNameAttribute(){
      return $this->category_model->title;
    }

    public function getPriceAttribute(){
      return Price::whereUserId($this->user_id)->get();
    }


}
