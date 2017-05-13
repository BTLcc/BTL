<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getAdminLogin()
    {
      if(Auth :: check())
      {
        return redirect('admin');
      }
      return view('admin.layout.login');
    }

    public function postAdminLogin(Request $request)
    {
      $this -> validate($request, [
        'email' => 'required',
        'password' => 'required'
      ],[
        'email.required' => 'Bạn chưa nhập email',
        'password.required' => 'Bạn chưa nhập mật khẩu'
      ]);

      if($request -> remember == 'true')
      {
        if(Auth :: attempt(['email' => $request -> email, 'password' => $request -> password], true)||Auth :: attempt(['name' => $request -> email, 'password' => $request -> password], true))
        {
          return redirect('admin');
        }
        else
        {
          return redirect('admin/login') -> with('alert', 'Đăng nhập không thành công (Sai email hoặc mật khẩu)');
        }
      }
      else
      {
        if(Auth :: attempt(['email' => $request -> email, 'password' => $request -> password])||Auth :: attempt(['name' => $request -> email, 'password' => $request -> password]))
        {
          return redirect('admin');
        }
        else
        {
          return redirect('admin/login') -> with('alert', 'Đăng nhập không thành công (Sai email hoặc mật khẩu)');
        }
      }
    }

    public function getAdminLogout()
    {
      Auth :: logout();
      return redirect("admin");
    }

    public function getInsert()
    {

    }

    public function postInsert(Request $request)
    {

    }

    public function getList()
    {

    }

    public function getUpdate($id)
    {

    }

    public function postUpdate(Request $request)
    {

    }

    public function getDelete($id)
    {

    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

}
