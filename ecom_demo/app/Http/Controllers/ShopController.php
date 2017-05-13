<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    //
    public function shop()
    {
      $categories = DB::table('categories') -> get();

      return view('shop.layout.index', ['categories' => $categories]);
    }

}
