<!-- dashboard -->
@extends('admin.layout.index')

@section('content')
<script>
  $(document).ready(function () {
    $(".nav menu").removeClass("active");//this will remove the active class from
                                       //previously active menu item
    $('#dashboard').addClass('active');
  });
</script>

<div id ="container-fluid">
  <div class="col-lg-12">
    <h1 class="page-header">
      Bảng điều khiển
    </h1>
  </div>
@endsection
