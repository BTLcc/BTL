@extends('admin.layout.category.category')

@section('subunit')
  <!-- .col-lg-12 -->

  @if(session('alert'))
    <div class="alert alert-success">
      {{session('alert')}}
    </div>
  @endif

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Danh sách thể loại</div>
        <div class="panel-body">
              <table data-toggle="table" data-show-refresh="true"
              data-show-toggle="true" data-show-columns="true" data-search="true"
              data-select-item-name="toolbar1" data-pagination="true"
              data-sort-name="name" data-sort-order="desc" id="categoryTable">
              <thead>
                <tr>
                  <th data-field="state" data-checkbox="true"></th>
                  <th data-field="id" data-sortable="true">ID thể loại</th>
                  <th data-field="name" data-sortable="true">Tên thể loại</th>
                  <th data-field="description" data-sortable="true">Mô tả</th>
                  <th data-field="books" data-sortable="true">Số sách</th>
                  <th data-field="parent" data-sortable="true">Tên thể loại cha</th>
                  <th data-field="isActive" data-sortable="true">Khả dụng</th>
                  <th data-field="createdAt" data-sortable="true">Ngày tạo</th>
                  <th data-field="updatedAt" data-sortable="true">Ngày sửa</th>
                  <th data-field="edit" data-sortable="true">Chỉnh sửa</th>
                  <th data-field="delete" data-sortable="true">Xóa</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                  <tr class="odd gradeX" align="center">
                    <td></td>
                    <td>{{$category -> id}}</td>
                    <td>{{$category -> name}}</td>
                    <td>{{$category -> description}}</td>
                    <td>{{$category -> item_count}}</td>
                    <td>
                      <?php
                        if($category -> parent != NULL)
                          echo $category -> parent -> name;
                        else
                          echo "Không có";
                       ?>
                    </td>
                    <td>{{$category -> is_active}}</td>
                    <td>{{$category -> created_at -> toDateString()}}</td>
                    <td>{{$category -> updated_at -> toDateString()}}</td>
                    <td class="center"><i class="glyphicon glyphicon-pencil icon-pencil"></i>
                      <a href="update/{{$category -> id}}"> Chỉnh sửa</td>
                    <td class="center"><i class="glyphicon glyphicon-trash icon-trash"></i>
                      <a href="delete/{{$category -> id}}"> Xóa</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection
