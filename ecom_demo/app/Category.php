<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories";

    public function book()
    {
      return $this -> hasMany('App\Book', 'category_id', 'id');
    }

    public function parent()
    {
      return $this -> belongsTo('App\Category', 'parent_id', 'id');
    }

    public function child()
    {
      return $this -> hasMany('App\Category', 'parent_id', 'id');
    }
}
