<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    protected $table = "sellers";

    public function book()
    {
      return $this -> hasMany('App\Book', 'seller_id', 'id');
    }

    public function user()
    {
      return $this -> belongsTo('App\User', 'user_id', 'id');
    }
}
