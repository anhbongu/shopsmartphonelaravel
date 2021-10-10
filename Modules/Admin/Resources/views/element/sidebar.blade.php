
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('admin') }}"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>

                  </li>
                  <li><a><i class="fa fa-edit"></i> Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.category.create') }}">Thêm danh mục</a></li>
                      <li><a href="{{ route('admin.category') }}">Danh sách danh mục</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Product<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.product.create') }}">Thêm Product</a></li>
                      <li><a href="{{ route('admin.product') }}">Danh sách Product</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Article<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.article.create') }}">Thêm Article</a></li>
                      <li><a href="{{ route('admin.article') }}">Danh sách Article</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>User<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.user.create') }}">Thêm user</a></li>
                      <li><a href="{{ route('admin.user') }}">Danh sách User</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Đơn hàng<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.cart') }}">Danh sách đơn hàng</a></li>
                     
                    </ul>
                  </li>

                 
                
                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->


            <!-- /menu footer buttons -->
          </div>
        </div>