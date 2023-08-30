<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Vũ Quyết Tiến</a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tài nguyên chung
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.services.index')}}" class="nav-link {{checkRouteName(['admin.services']) ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dịch vụ</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.technologies.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Công nghệ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.customers.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Khách hàng</p>
                </a>
              </li>

            </ul>
          </li>

          <!-- Menu giao diện -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Giao diện
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.website-types.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loại giao diện</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.websites.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Giao diện</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu bảng giá -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Bảng giá - thuộc tính
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.prices.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-dollar-sign"></i>
                  <p>Bảng giá</p>
                </a> 
              </li>
              <li class="nav-item">   
                <a href="{{route('admin.properties.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thuộc tính</p>
                </a>
              </li>
              <li class="nav-item">   
                <a href="{{route('admin.web-functions.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chức năng</p>
                </a>
              </li>
            </ul>
                    
          </li>

          <!-- Menu blog -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.blog-types.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.blogs.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu tin tức -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-rss"></i>
              <p>
                Tin tức
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.article-types.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục tin tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.articles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tin tức</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Đơn hàng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.orders.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đơn hàng mới</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.orders.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đơn hàng đã xong</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.photos.index')}}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Hình ảnh</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.settings.index')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Cài đặt</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
