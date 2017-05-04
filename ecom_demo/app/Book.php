<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = "books";

    public function seller()
    {
      return $this -> belongsTo('App\Seller', 'seller_id', 'id');
    }

    public function category()
    {
      return $this -> belongsTo('App\Category', 'category_id', 'id');
    }
}
