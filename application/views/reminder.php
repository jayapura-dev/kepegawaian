<?php
$this->load->model('home/M_home');
$notif = $this->M_home->hitung_kp();
$data_kp = $this->M_home->data_kp();

foreach($notif as $i){
  $signal = $i->jumlah_pejabat;
}
?>

<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-bell-o" aria-hidden="true"></i>
    <?php if($signal != ''){ ?>
        <span class="badge badge-important"><?php echo $signal ?></span>
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
                    <!--<div class="notification-content">
                        <h5><strong><?php echo $kp->nama ?></strong> / <?php echo $kp->tgl_kp ?> : <?php echo $kp->selisih ?> Hari Lagi</h5>
                        <p>Nip. <?php echo $kp->nip ?></p>
                        <br/>
                        <span class="notification-date"></span>
                    </div>!-->
                </a>
            </li>
          <?php } ?>
            <!--<li>
                <a href="#">
                    <div class="notification-icon">
                        <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                    </div>
                    <div class="notification-content">
                        <span class="notification-date">16 Sept</span>
                        <h2>Sulaiman din</h2>
                        <p>Please done this project as soon possible.</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="notification-icon">
                        <span class="adminpro-icon adminpro-shield"></span>
                    </div>
                    <div class="notification-content">
                        <span class="notification-date">16 Sept</span>
                        <h2>Victor Jara</h2>
                        <p>Please done this project as soon possible.</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="notification-icon">
                        <span class="adminpro-icon adminpro-analytics-arrow"></span>
                    </div>
                    <div class="notification-content">
                        <span class="notification-date">16 Sept</span>
                        <h2>Victor Jara</h2>
                        <p>Please done this project as soon possible.</p>
                    </div>
                </a>
            </li>!-->
        </ul>
        <div class="notification-view">
            <a href="<?php echo base_url()?>kpb/usulan_kp">Lihat Data Usulan KP</a>
        </div>
    </div>
</li>
