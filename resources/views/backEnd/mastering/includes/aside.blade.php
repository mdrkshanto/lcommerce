<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('backEnd/assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">lCommerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backEnd/assets') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('categoryList') }}" class="nav-link{{  request()->routeIs('categoryList') || request()->routeIs('addCategory') || request()->routeIs('editCategory') ? ' bg-secondary active' : '' }}">
                <i class="fas fa-sitemap"></i>
                <p>Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('brandList') }}" class="nav-link{{  request()->routeIs('brandList') || request()->routeIs('addBrand') || request()->routeIs('editBrand') ? ' bg-secondary active' : '' }}">
                <i class="fas fa-certificate"></i>
                <p>Brands</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('productList') }}" class="nav-link{{  request()->routeIs('productList') || request()->routeIs('addProduct') ? ' bg-secondary active' : '' }}">
              <i class="nav-icon fas fa-boxes"></i>
              <p>Products</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
