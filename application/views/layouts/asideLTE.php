<!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-pink">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>dashboard" class="brand-link navbar-pink text-center" style="background-color: #fb005b !important;">
      <span style="color: #ffffff;">Unno</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block" style="color: #fb005b; font-weight: 455;">Usuario</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="<?php echo base_url() ?>dashboard" class="nav-link active" style="background-color: #fb005b !important;">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>clientes/clientes" class="nav-link" style="color: #fb005b;">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: #fb005b;">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Proveedores
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>productos/productos" class="nav-link" style="color: #fb005b;">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: #fb005b;">
              <i class="nav-icon fas fa-tags"></i>
              <p>

                Marcas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>ventas/ventas" class="nav-link" style="color: #fb005b;">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: #fb005b;">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Reportes
              </p>
            </a>
            
          </li>
          
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>