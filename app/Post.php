<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'slug', 'content', 'category_id'];


    public function category(){
        return $this->belongsTo('App\Category');
    }
}
