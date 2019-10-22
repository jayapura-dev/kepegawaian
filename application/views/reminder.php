<?php
$this->load->model('home/M_home');
$notif = $this->M_home->hitung_kp();
$data_kp = $this->M_home->data_kp();

$notif_kgb = $this->M_home->hitung_kgb();
$data_kgb = $this->M_home->data_ukgb();

$notif_pen = $this->M_home->hitung_pensiun();
$data_pen = $this->M_home->data_pensiun();

$notif_ib = $this->M_home->hitung_usulan_ib();
$data_ib = $this->M_home->data_usulan_ijin();

$notif_tb = $this->M_home->hitung_usulan_tb();
$data_tb = $this->M_home->data_usulan_tb();

foreach($notif as $i){
  $signal = $i->jumlah_pejabat;
}
foreach($notif_kgb as $k){
  $signal_kgb = $k->jumlah_pejabat;
}
foreach($notif_pen as $p){
  $signal_pen = $p->jumlah_pejabat;
}
foreach($notif_ib as $ib){
  $signal_ib = $ib->jumlah_pejabat;
}
foreach($notif_tb as $tb){
  $signal_tb = $tb->jumlah_pejabat;
}
?>

<!-- Start Notifikasi KP !-->
<?php if ($signal === '0'): ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-bell" aria-hidden="true"></i>
  </a>
  <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
    <text class="text-center"><strong>Tidak Ada Notifikasi KP</strong></text>
  </div>
<?php
else:?>
</li>
  <li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-bell-o" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal ?></span>
  </a>
    <div role="menu" class="notification-author dropdown-menu animated flipInX">
        <div class="notification-single-top">
            <h1>Usulan KP</h1>
        </div>
        <ul class="notification-menu">
            <?php foreach($data_kp as $kp){?>
            <li>
                <a href="#">
                    <div class="notification-icon">
                        <img src="<?php echo base_url()?>images/foto_pegawai/<?php echo $kp->path_foto ?>" width="90px" alt="">
                    </div>
                    <div class="notification-content">
                        <p> <strong><?php echo $kp->nama ?></strong>  <?php echo $kp->tgl_kp ?> <br/><?php echo $kp->selisih ?> Hari Lagi</p>
                    </div>

                </a>
            </li>
            <?php } ?>
        </ul>
        <div class="notification-view">
            <a href="<?php echo base_url()?>kpb/usulan_kp">Lihat Data Usulan KP</a>
        </div>
    </div>
</li>
<?php endif ?>
<!-- End Notifikasi KP !-->

<!-- Start Notifikasi KGB !-->
<?php if ($signal_kgb === '0'): ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-money" aria-hidden="true"></i>
  </a>
  <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
    <text class="text-center"><strong>Tidak Ada Notifikasi KGB</strong></text>
  </div>
</li>

<?php else: ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-money" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal_kgb ?></span>
  </a>
    <div role="menu" class="notification-author dropdown-menu animated flipInX">
        <div class="notification-single-top">
            <h1>Usulan KGB</h1>
        </div>
        <ul class="notification-menu">
            <?php foreach($data_kgb as $gb){?>
            <li>
                <a href="#">
                    <div class="notification-icon">
                        <img src="<?php echo base_url()?>images/foto_pegawai/<?php echo $gb->path_foto ?>" width="90px" alt="">
                    </div>
                    <div class="notification-content">
                        <p> <strong><?php echo $gb->nama ?></strong>  <?php echo $gb->tgl_ukgb ?> <br/><?php echo $gb->selisih ?> Hari Lagi</p>
                    </div>
                </a>
            </li>
          <?php } ?>
        </ul>
        <div class="notification-view">
            <a href="<?php echo base_url()?>kgb/usulan_kgb">Lihat Data Usulan KGB</a>
        </div>
    </div>
</li>
<?php endif ?>
<!-- End Notifikasi KGB !-->

<!-- Start Notifikasi Pensiun !-->
<?php if ($signal_pen === '0'): ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-user" aria-hidden="true"></i>
  </a>
  <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
    <text class="text-center"><strong>Tidak Ada Notifikasi Pensiun</strong></text>
  </div>
</li>

<?php else: ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">

    <i class="fa fa-user" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal_pen ?></span>
  </a>
    <div role="menu" class="notification-author dropdown-menu animated flipInX">
        <div class="notification-single-top">
            <h1>Usulan Pensiun</h1>
        </div>
        <ul class="notification-menu">
            <?php foreach($data_pen as $pen){?>
            <li>
                <a href="#">
                    <div class="notification-icon">
                        <img src="<?php echo base_url()?>images/foto_pegawai/<?php echo $pen->path_foto ?>" width="70px" alt="">
                    </div>
                    <div class="notification-content">
                        <p><strong><?php echo $pen->nama ?></strong> <?php echo $pen->tgl_pensiun ?> <br/><?php echo $pen->selisih ?> Hari Lagi </p>
                        <h5></h5>
                    </div>
                </a>
            </li>
          <?php } ?>
        </ul>
        <div class="notification-view">
            <a href="<?php echo base_url()?>pensiun/usulan_pensiun">Lihat Data Usulan Pensiun</a>
        </div>
    </div>
</li>
<?php endif ?>
<!-- End Notifikasi Pensiun !-->

<!-- Start Notifikasi Ijin Belajar !-->
<?php if ($signal_ib === '0'): ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
  </a>
  <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
    <text class="text-center"><strong>Tidak Ada Notifikasi Pensiun</strong></text>
  </div>
</li>

<?php else: ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">

    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal_ib ?></span>
  </a>
    <div role="menu" class="notification-author dropdown-menu animated flipInX">
        <div class="notification-single-top">
            <h1>Usulan PIB</h1>
        </div>
        <ul class="notification-menu">
            <?php foreach($data_ib as $ib){?>
            <li>
                <a href="#">
                    <div class="notification-icon">
                        <img src="<?php echo base_url()?>images/foto_pegawai/<?php echo $ib->path_foto ?>" width="70px" alt="">
                    </div>
                    <div class="notification-content">
                        <p><strong><?php echo $ib->nama ?></strong> <?php echo $ib->tgl_akhir ?> <br/><?php echo $ib->selisih ?> Hari Lagi </p>
                        <h5></h5>
                    </div>
                </a>
            </li>
          <?php } ?>
        </ul>
        <div class="notification-view">
            <a href="<?php echo base_url()?>ib/usulan_pib">Lihat Data Usualan PIB</a>
        </div>
    </div>
</li>
<?php endif ?>
<!-- End Notifikasi Ijin Belajar !-->

<!-- Start Notifikasi Ijin Belajar !-->
<?php if ($signal_tb === '0'): ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-briefcase" aria-hidden="true"></i>
  </a>
  <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
    <text class="text-center"><strong>Tidak Ada Notifikasi PTB</strong></text>
  </div>
</li>

<?php else: ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">

    <i class="fa fa-briefcase" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal_tb ?></span>
  </a>
    <div role="menu" class="notification-author dropdown-menu animated flipInX">
        <div class="notification-single-top">
            <h1>Usulan PTB</h1>
        </div>
        <ul class="notification-menu">
            <?php foreach($data_tb as $tb){?>
            <li>
                <a href="#">
                    <div class="notification-icon">
                        <img src="<?php echo base_url()?>images/foto_pegawai/<?php echo $tb->path_foto ?>" width="70px" alt="">
                    </div>
                    <div class="notification-content">
                        <p><strong><?php echo $tb->nama ?></strong> <?php echo $tb->tgl_akhir ?> <br/><?php echo $tb->selisih ?> Hari Lagi </p>
                        <h5></h5>
                    </div>
                </a>
            </li>
          <?php } ?>
        </ul>
        <div class="notification-view">
            <a href="<?php echo base_url()?>tb/usulan_ptb">Lihat Data Usualan PTB</a>
        </div>
    </div>
</li>
<?php endif ?>
<!-- End Notifikasi Ijin Belajar !-->
