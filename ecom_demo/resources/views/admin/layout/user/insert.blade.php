<!-- insert a category -->
@extends('admin.layout.index')

@section('content')
<script>
  $(document).ready(function () {
    $(".nav menu").removeClass("active");//this will remove the active class from
                                       //previously active menu item
    $('#function').addClass('in');
    $('#category').addClass('active');
  });
</script>

<div id ="container-fluid">
  <div class="col-lg-12">
    <h1 class="page-header">
      Thể loại
    </h1>
  </div>
  <!-- .col-lg-12 -->

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Thêm thể loại</div>
        <div class="panel-body">
          <div class="col-md-6">
            <form role="form" method="post" action="insert.blade.php"
            onsubmit="return checkInput();">

              <div class="form-group">
                <label>Thể loại cha</label>
                <select class="form-control">
                  <option value="0">Hãy chọn thể loại cha tương ứng</option>
                  <?php
                  $i = 0;
                  foreach ($categories as $category)
                  {
                    $i++;
                    echo '<option value="'.$i.'">'.$category->name.'</option>;';
                  }
                  ?>
                </select>
              </div>

              <div class="form-group">
                  <label>Tên thể loại</label>
                  <input class="form-control" placeholder="Viết tên thể loại vào đây"/>
                </div>

              <div class="form-group">
                  <label>Mô tả thể loại</label>
                  <textarea class="form-control" placeholder="Viết mô tả" rows="5"></textarea>
                </div>

              <div class="form-group">
                <label>Khả dụng:</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>Có
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">Không
                  </label>
                </div>
              </div>

              <div class="form-group" id="button">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="reset" class="btn btn-default">Làm mới</button>

              </div>

            </form>
          </div>
          </div>
        </div>
      </div><!-- /.col-->
    </div><!-- /.row -->

  </div><!--/.main-->
@endsection
