<?php
$this->load->model('home/M_home');
$notif = $this->M_home->hitung_kp();
$data_kp = $this->M_home->data_kp();
$notif_kgb = $this->M_home->hitung_kgb();
$data_kgb = $this->M_home->data_ukgb();
foreach($notif as $i){
  $signal = $i->jumlah_pejabat;
}
foreach($notif_kgb as $k){
  $signal_kgb = $k->jumlah_pejabat;
}
?>

<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <?php if($signal != ''){ ?>
    <i class="fa fa-bell-o" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal ?></span>
    <?php }
    else{?>
    <i class="fa fa-bell-o" aria-hidden="true"></i>
  <?php } ?>
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
                        <p> <strong><?php echo $kp->nama ?></strong>  <?php echo $kp->tgl_kp ?> : <?php echo $kp->selisih ?> Hari Lagi</p>
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
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <?php if($signal_kgb != ''){ ?>
    <i class="fa fa-money" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal_kgb ?></span>
    <?php }
    else{ ?>
    <i class="fa fa-money" aria-hidden="true"></i>
    <?php } ?>
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
                        <p> <strong><?php echo $gb->nama ?></strong>  <?php echo $gb->tgl_ukgb ?> : <?php echo $gb->selisih ?> Hari Lagi</p>
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
