<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('template/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('template/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Quản lý người dùng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.users.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách người dùng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.users.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm người dùng</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Quản lý danh mục
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.categories.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh mục bài viết</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.categories.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm danh mục</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Quản lý thẻ
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.tags.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách thẻ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.tags.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm thẻ</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Quản lý bài viết
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.posts.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách bài viết</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.posts.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm bài viết</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.contacts.index') }}" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p>
              Quản lý liên hệ
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pager"></i>
            <p>
              Quản lý trang
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.pages.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách trang</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.pages.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm trang</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.comments.index') }}" class="nav-link">
            <i class="nav-icon fas fa-comment"></i>
            <p>
              Quản lý bình luận
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.settings.index') }}" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Cài đặt
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.logout') }}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Đăng xuất
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
