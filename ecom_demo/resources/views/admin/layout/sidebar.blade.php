<!-- Sidebar -->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <form role="search">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Tìm kiếm">
    </div>
  </form>
  <ul class="nav menu">
    <!-- Dashboard -->
    <li id="dashboard"><a href="{{ url('admin/dashboard') }}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Bảng điều khiển</a></li>
    <!-- Category -->
    <li class="parent" id="category">
      <a href="#">
        <span data-toggle="collapse" data-target="#cfunction"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"></use></svg>Thể loại</span>
      </a>
      <ul class="children collapse" id="cfunction">
        <!-- Insert a category -->
        <li>
          <a id="cinsert" href="{{ url('admin/category/insert') }}">
            <svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg> Thêm thể loại
          </a>
        </li>
        <!-- Categories list -->
        <li>
          <a id="clist" class="" href="{{ url('admin/category/list') }}">
            <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Danh sách thể loại
          </a>
        </li>
      </ul>
    </li>
    <!-- Book -->
    <li class="parent" id="book">
      <a href="#">
        <span data-toggle="collapse" data-target="#bfunction"><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"></use></svg>Sách</span>
      </a>
      <ul class="children collapse" id="bfunction">
        <!-- Insert a category -->
        <li>
          <a id="binsert" href="{{ url('admin/book/insert') }}">
            <svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg> Thêm sách
          </a>
        </li>
        <!-- Categories list -->
        <li>
          <a id="blist" class="" href="{{ url('admin/book/list') }}">
            <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Danh mục sách
          </a>
        </li>
      </ul>
    </li>
    <!-- User -->
    <li class="parent" id="user">
      <a href="#">
        <span data-toggle="collapse" data-target="#ufunction"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Người dùng</span>
        </a>
        <ul class="children collapse" id="ufunction">
          <!-- Insert a category -->
          <li>
            <a id="uinsert" href="{{ url('admin/user/insert') }}">
              <svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg> Thêm người dùng
            </a>
          </li>
          <!-- Categories list -->
          <li>
            <a id="ulist" class="" href="{{ url('admin/user/list') }}">
              <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Danh sách người dùng
            </a>
          </li>
        </ul>
      </li>
      </li>
    <li role="presentation" class="divider"></li>
  </ul>
  <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
</div><!--/.sidebar-->
