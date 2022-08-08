<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $user['role']; ?> &mdash; PMB MAN 1 MODEL BUKIT TINGGI</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-2">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>


        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="http://localhost/kel8_bpfv2/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $user['nama']; ?></div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">

            <a href="http://localhost/Project_kel8V2/dist/features_activities" class="dropdown-item has-icon">
              <i class="fas fa-bolt"></i> Activities
            </a>
            <a href="http://localhost/Project_kel8V2/dist/features_settings" class="dropdown-item has-icon">
              <i class="fas fa-cog"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="http://localhost/Project_kel8V2/">SPSB MAN 1 Bukit Tinggi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="http://localhost/Project_kel8V2/">SPSB</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Akses Halaman</li>

            <!-- Nav Item - Pages Collapse Menu -->

            <?php
            if ($user['role'] == 'Admin') { ?>
              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Siswa/') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Siswa</span>
                </a>

              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Ayah/') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Data Ayah</span>
                </a>

              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Ibu/') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Data Ibu</span>
                </a>

              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Wali/') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Data Wali</span>
                </a>


              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('auth/logout') ?>">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Logout</span>
                </a>

              </li>

            <?php } else {
            ?>
              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Ayah/tambah') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Tambah Data Ayah</span>
                </a>

              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Ibu/tambah') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Tambah Data Ibu</span>
                </a>

              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Wali/tambah') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Tambah Data Wali</span>
                </a>

              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Siswa/tambah') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Tambah Data Siswa</span>
                </a>

              </li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="<?= site_url('Auth/Logout') ?>">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Logout</span>
                </a>

              </li>


              </li>
            <?php } ?>






          </ul>

        </aside>
      </div>