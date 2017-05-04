<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function admin()
    {
      return view("admin.layout.index");
    }

    public function dashboard()
    {
      return view("admin.layout.dashboard.dashboard");
    }

    public function binsert()
    {
      return view('admin.layout.book.insert');
    }

    public function blist()
    {
      return view('admin.layout.book.list');
    }

    public function uinsert()
    {
      return view('admin.layout.user.insert');
    }

    public function ulist()
    {
      return view('admin.layout.user.list');
    }
}
