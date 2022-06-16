<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=URL::to('public/img/bbva_logo.webp')?>" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Usuario</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=URL::to('admin/marca_form')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Registrar Marca<span class="right badge badge-danger">New</span></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=URL::to('admin/modelo_form')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Registrar Modelo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=URL::to('admin/auto_form')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Registrar Vehículo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=URL::to('admin/banner')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Registrar Banner</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>