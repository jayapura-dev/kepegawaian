<?php if ($this->session->userdata('level')=='1') {?>

<div class="left-custom-menu-adp-wrap">
    <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="<?php echo base_url()?>home" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Data Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
              <a href="<?php echo base_url()?>data_master/jabatan" class="dropdown-item">Jabatan</a>
              <a href="<?php echo base_url()?>data_master/pangkat" class="dropdown-item">Pangkat</a>
              <a href="<?php echo base_url()?>pegawai" class="dropdown-item">Pegawai</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Pangkat</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>kpb/usulan_kp" class="dropdown-item">Usulan KP</a>
                <a href="<?php echo base_url()?>kpb" class="dropdown-item">KP</a>
                <a href="<?php echo base_url()?>kpb/cari_kpb" class="dropdown-item">Laporan</a>
            </div>
        </li>

        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-money"></i> <span class="mini-dn">Gaji Pokok</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>kgb/usulan_kgb" class="dropdown-item">Usulan KG</a>
                <a href="<?php echo base_url()?>kgb" class="dropdown-item">KGB</a>
                <a href="#" class="dropdown-item">Laporan</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-plus-circle"></i> <span class="mini-dn">Jabatan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>jabatan" class="dropdown-item">Jabatan</a>
                <a href="#" class="dropdown-item">Laporan</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-calendar"></i> <span class="mini-dn">Pengsiun</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>pensiun/usulan_pensiun" class="dropdown-item">Usulan Pengsiun</a>
                <a href="<?php echo base_url()?>pensiun" class="dropdown-item">Data Pensiun</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Belajar</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="#" class="dropdown-item">Ijin Belajar</a>
                <a href="#" class="dropdown-item">Tugas Belajar</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-briefcase"></i> <span class="mini-dn">Mutasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="#" class="dropdown-item">Usulan TB</a>
                <a href="#" class="dropdown-item">TB</a>
            </div>
        </li>

    </ul>
</div>

<?php }
elseif ($this->session->userdata('level')=='2'){?>
  <div class="left-custom-menu-adp-wrap">
      <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="<?php echo base_url()?>Home/beranda/1" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
        </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Registrasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>Periksa" class="dropdown-item">Periksa</a>
              </div>
          </li>
      </ul>
  </div>
<?php }

elseif($this->session->userdata('level')=='4'){?>
  <div class="left-custom-menu-adp-wrap">
      <ul class="nav navbar-nav left-sidebar-menu-pro">
          <li class="nav-item">
              <a href="<?php echo base_url()?>Home/beranda/1" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Laboratorium</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>Lab" class="dropdown-item">Jenis Pemeriksaan</a>
                  <a href="<?php echo base_url()?>Lab/pasien_periksa_lab" class="dropdown-item">Periksa Lab</a>
              </div>
          </li>
      </ul>
  </div>
<?php }
?>
