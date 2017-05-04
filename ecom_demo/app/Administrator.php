<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    //
    protected $table = "administrators";

    public function user()
    {
      return $this -> belongsTo('App\User', 'user_id', 'id');
    }
}
