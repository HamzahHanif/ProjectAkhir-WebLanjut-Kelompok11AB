<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">

            <?php if( in_groups('user')) : ?>
          <li class="nav-item nav-category">
            <span class="nav-link">User</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-airplay text-primary"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/user/infaq'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-coin text-primary"></i>
              </span>
              <span class="menu-title">Berinfaq</span>
            </a>
          </li>
          <?php endif; ?>
          
          <?php if( in_groups('admin-pengurus')) : ?>
          <li class="nav-item nav-category">
            <span class="nav-link">Pengurus Masjid</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-airplay text-primary"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('admin-pengurus'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-coin text-primary"></i>
              </span>
              <span class="menu-title">Data Zakat</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/user/infaq'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-coin text-primary"></i>
              </span>
              <span class="menu-title">Data Infaq</span>
            </a>
          </li>
          <?php endif; ?>

          <?php if( in_groups('super-admin')) : ?>
          <li class="nav-item nav-category">
            <span class="nav-link">Super Admin</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-airplay text-primary"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/admin-pengurus'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-coin text-primary"></i>
              </span>
              <span class="menu-title">Data Zakat</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/user/infaq'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-coin text-primary"></i>
              </span>
              <span class="menu-title">Data Infaq</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/super'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-coin text-primary"></i>
              </span>
              <span class="menu-title">Data User</span>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </nav>