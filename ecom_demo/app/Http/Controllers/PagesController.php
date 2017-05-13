<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function adminLogin()
    {
      return view("admin.layout.login");
    }

    public function admin()
    {
      if(Auth::check())
      {
        return view('admin.layout.index');
      }
      else
      {
        return redirect('admin/login');
      }
    }

    public function dashboard()
    {
      if(Auth::check())
      {
        return view("admin.layout.dashboard.dashboard");
      }
      else
      {
        return redirect('admin/login');
      }
    }

    public function binsert()
    {
      if(Auth::check())
      {
        return view('admin.layout.book.insert');
      }
      else
      {
        return redirect('admin/login');
      }
    }

    public function blist()
    {
      if(Auth::check())
      {
        return view('admin.layout.book.list');
      }
      else
      {
        return redirect('admin/login');
      }
    }

    public function uinsert()
    {
      if(Auth::check())
      {
        return view('admin.layout.user.insert');
      }
      else
      {
        return redirect('admin/login');
      }
    }

    public function ulist()
    {
      if(Auth::check())
      {
        return view('admin.layout.user.list');
      }
      else
      {
        return redirect('admin/login');
      }
    }
}
