@extends('admin.layout.category.category')

@section('subunit')
  <!-- .col-lg-12 -->

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">{{{ $category -> name }}}</div>
        <div class="panel-body">
          <div class="col-md-6">

            @if(count($errors) > 0)
              <div class="alert alert-danger">
                @foreach($errors -> all() as $err)
                  {{$err}} <br>
                @endforeach
              </div>
            @endif

            @if(session('alert'))
              <div class="alert alert-success">
                {{session('alert')}}
              </div>
            @endif

            <form role="form" method="post" action="{{$category -> id}}"
            onsubmit="return checkInput();">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />

              <div class="form-group">
                <label>Thể loại cha</label>
                <select class="form-control" name="parent" id="parent_select">
                  <option value="0">Hãy chọn thể loại cha tương ứng</option>
                    <?php
                    $i = 0;
                    foreach ($categories as $c)
                    {
                      $i++;
                      echo '<option value="'.$i.'">'.$c->name.'</option>;';
                      if($c -> id == $category -> parent_id)
                      {
                          ?>
                            <script>
                            $(document).ready(function () {
                              $('#parent_select').val('<?php echo $i ?>').change();
                            });
                            </script>;
                          <?php
                      }
                    }
                    ?>
                </select>
              </div>

              <div class="form-group">
                  <label>Tên thể loại</label>
                  <input class="form-control" name="name" placeholder="Viết tên thể loại vào đây" value="{{ $category -> name }}"/>
                </div>

              <div class="form-group">
                  <label>Mô tả thể loại</label>
                  <textarea class="form-control" name="description" placeholder="Viết mô tả" rows="5">{{ $category -> description }}</textarea>
                </div>

              <div class="form-group">
                <label>Khả dụng:</label>
                <div class="radio" id="is_active">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>Có
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="0">Không
                  </label>
                </div>
              </div>

              <div class="form-group" id="button">
                <button type="submit" name="submit" class="btn btn-primary">Sửa</button>
                <button type="reset" name="reset" class="btn btn-default">Làm mới</button>

              </div>
            </form>
          </div>
          </div>
        </div>
      </div><!-- /.col-->
    </div><!-- /.row -->
@endsection
