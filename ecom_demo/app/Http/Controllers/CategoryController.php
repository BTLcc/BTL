<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function getInsert()
    {
      $categories = DB::table('categories') -> get();

      return view('admin.layout.category.insert', ['categories' => $categories]);
    }

    public function postInsert(Request $request)
    {
      $this -> validate($request,
      [
        'name' => 'required|min:3|max:30||unique:categories,name,'.$category -> id
      ],
      [
        'name.required' => 'Bạn chưa nhập tên thể loại',
        'name.unique' => 'Tên thể loại đã tồn tại',
        'name.min' => 'Tên thể loại phải nhiều hơn 3 kí tự',
        'name.max' => 'Tên thể loại phải ít hơn 30 kí tự',
      ]);

      $category = new \App\ Category;
      $category -> name = $request -> name;
      if($request -> description != null)
        $category -> description = $request -> description;
      $category -> is_active = $request -> optionsRadios;
      if($request -> parent != 0)
        $category -> parent_id = $request -> parent;
      else
        $category -> parent_id = NULL;
      $category -> save();

      return redirect('admin/category/insert') -> with('alert', 'Thêm thể loại thành công');
    }

    public function getList()
    {
      $categories = \App\Category :: all();

      return view('admin.layout.category.list', ['categories' => $categories]);
    }

    public function getUpdate($id)
    {
      $categories = DB::table('categories') -> get();
      $category = \App\Category :: find($id);

      return view('admin.layout.category.update', ['category' => $category, 'categories' => $categories]);
    }

    public function postUpdate($id, Request $request)
    {
      $category = \App\Category :: find($id);
      $this -> validate($request,
      [
        'name' => 'required|min:3|max:30||unique:categories,name,'.$category -> id
      ],
      [
        'name.required' => 'Bạn chưa nhập tên thể loại',
        'name.unique' => 'Tên thể loại đã tồn tại',
        'name.min' => 'Tên thể loại phải nhiều hơn 3 kí tự',
        'name.max' => 'Tên thể loại phải ít hơn 30 kí tự',
      ]);

      $category -> name = $request -> name;
      if($request -> description != null)
        $category -> description = $request -> description;
      $category -> is_active = $request -> optionsRadios;
      if($request -> parent != 0)
        $category -> parent_id = $request -> parent;
      else
        $category -> parent_id = NULL;
      $category -> save();

      return redirect('admin/category/update/'.$id) -> with('alert', 'Sửa thành công');
    }

    public function getDelete($id)
    {
      $category = \App\Category :: find($id);
      $category -> delete();

      return redirect('admin/category/list') -> with('alert', 'Xóa thành công');
    }
}
