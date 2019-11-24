<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('wisata') ?>">
        <div class="sidebar-brand-icon">
          <i class="fab fa-gofore"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GOGOGO</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('wisata') ?>">
          <i class="fas fa-globe-asia"></i>
          <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          KATEGORI
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'Wisata'; ?>">
            <i class="fas fa-fw fa-map"></i>
            <span>Wisata Alam</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'Wisata'; ?>">
              <i class="fas fa-fw fa-map"></i>
              <span>Wisata Sejarah</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'Wisata'; ?>">
                <i class="fas fa-fw fa-map"></i>
                <span>Wisata Monumen</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'Wisata';?> ">
                  <i class="fas fa-fw fa-map"></i>
                  <span>Wisata Museum</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url().'Wisata'; ?>">
                    <i class="fas fa-fw fa-map"></i>
                    <span>Wisata Pantai</span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'Wisata'; ?>">
                      <i class="fas fa-fw fa-map"></i>
                      <span>Wisata Taman Hiburan</span></a>
                    </li>


                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                      <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                  </ul>
                  <!-- End of Sidebar -->

                  <!-- Content Wrapper -->
                  <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                      <!-- Topbar -->
                      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                          <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                          <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-success" type="button">
                                <i class="fas fa-search fa-sm"></i>
                              </button>
                            </div>
                          </div>
                        </form>


                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                          </a>

                        </li>

                        <div class="navbar mr-auto">
                          <ul class="nav navbar-nav navbar-middle">
                            <li>
                              <?php 
                              $booking = 'Jumlah Pembookingan : '.$this->cart->total_items().'items'
                              ?>

                              <?php echo anchor('wisata/detail_booking', $booking)  ?>
                            </li>
                          </ul>
                        </div>

                        <div align="center">
                          <a href="<?php echo base_url('admin/data_wisata') ?>"><div class="btn btn-sm btn-danger">
                          Halaman Admin</div></a>
                        </div>

                      </ul>

                    </nav>
