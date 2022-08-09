
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="<?= base_url('assets/images/febro.jpg');?>" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">Febro Herdyanto</span>
                                  </div>
                              </div>
                          </div>


                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Dashboard</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="<?= base_url('/dashboard'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>


                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Kategori</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="<?= base_url('/kategori'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Data Kategori</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                          </ul>


                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Tamu Undangan</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="<?= base_url('/tamu'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-users"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Data Tamu Undangan</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="<?= base_url('tamu/add'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-user-plus"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Tambah Data Tamu</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>


                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Undangan</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="<?= base_url('/inv-pria'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-address-book"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Undangan Pria</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="<?= base_url('/inv-wanita'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-address-book"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Undangan Wanita</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>


                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Data Kehadiran</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="<?= base_url('/kehadiran'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-user-check"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Kehadiran Tamu</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="<?= base_url('doa'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-heart-circle-check"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Doa dan Harapan</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Laporan Transaksi</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="<?= base_url('/unpaid'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Data Belum Iuran</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="<?= base_url('/kas'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Data Kas (Bln/Thn)</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>        
                          </ul>

                      </div>
                  </nav>