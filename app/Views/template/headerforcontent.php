<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page - The Wedding of Febro and Mustika</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Sistem Informasi Pembayaran Iuran RT dengan nama 'Siforate FHika'. Dibuat untuk memenuhi tugas akhir Pemrograman Web Semester 4 - Teknik Informatika - Universitas Pelita Bangsa." />
      <meta name="keywords" content="sistem, informasi, sistem informasi iuran, iuranrt, febroherdyanto, upb, pelitabangsa" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="<?= base_url('/assets/images/newlogo.png'); ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?= base_url('/assets/pages/waves/css/waves.min.css');?>" type="text/css" media="all">
      <!-- Required Fremwork --> 
      <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/bootstrap/css/bootstrap.min.css'); ?>">
      <!-- waves.css -->
      <link rel="stylesheet" href="<?= base_url('/assets/pages/waves/css/waves.min.css'); ?>" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/icon/themify-icons/themify-icons.css'); ?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/jquery.mCustomScrollbar.css'); ?>">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/style.css'); ?>">

      <!-- DATA TABLE -->

  </head>

  <body>

  
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">

        <?=
          // =============================================================
          // ======================== START OF NAVBAR ======================
          // =============================================================
        
          $this->include('template/navbar');

          // =============================================================
          // ======================== END OF NAVBAR ======================
          // =============================================================
        ?>


        
          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">

                <?=
                    // ====================================================
                    // TAMPILAN MENU SIDEBAR KIRI
                    // ====================================================

                    $this->include('template/sidebar');

                    // ====================================================
                    // END OF TAMPILAN MENU SIDEBAR
                    // ====================================================
                ?>


                  <div class="pcoded-content">

                    <?=
                        // ====================================================
                        // START HEADER ATAS
                        // ====================================================
                    
                        $this->include('template/header');

                        // ====================================================
                        // START HEADER ATAS
                        // ====================================================
                    ?>

                    
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">