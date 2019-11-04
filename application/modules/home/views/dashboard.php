<script src="<?php echo base_url('assets/js/highcharts.js')?>"></script>
<script src="<?php echo base_url('assets/js/exporting.js')?>"></script>
<script src="<?php echo base_url('assets/js/export-data.js')?>"></script>

<?php
foreach($jumlah_pejabat as $i){
  $jp = $i->jumlah_pejabat;
  $jps = $i->jastruk;
  $jpfu = $i->jafung_umum;
  $jpft = $i->jafung_tertentu;
}

?>

<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                          READ-K.4
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">DASHBOARD</a> <span class="bread-slash"></span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="income-order-visit-user-area">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <!--<div id="jpkp" style="min-width: 80px; height: 60px; max-width: 600px; margin: 0 auto"></div>!-->
            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                <div class="income-title">
                    <div class="main-income-head">
                        <h5>Jumlah Pejabat</h5>
                        <div class="main-income-phara">
                            <p>BBKSDA</p>
                        </div>
                    </div>
                </div>
                <div class="income-dashone-pro">
                    <div class="income-rate-total">
                        <div class="price-adminpro-rate">
                            <h3><span></span><span class="counter"><?php echo $jp ?></span></h3>
                        </div>

                    </div>
                    <div class="income-range">
                        <p>Prosentase</p>
                        <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                <div class="income-title">
                    <div class="main-income-head">
                        <h5>Jumlah Pejabat</h5>
                        <div class="main-income-phara order-cl">
                            <p>Struktural</p>
                        </div>
                    </div>
                </div>
                <div class="income-dashone-pro">
                    <div class="income-rate-total">
                        <div class="price-adminpro-rate">
                            <h3><span class="counter"><?php echo $jps ?></span></h3>
                        </div>

                    </div>
                    <div class="income-range order-cl">
                        <p>Prosentase</p>
                        <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                <div class="income-title">
                    <div class="main-income-head">
                        <h5>Jumlah Pejabat</h5>
                        <div class="main-income-phara visitor-cl">
                            <p title="Jabatan Fungsional Tertentu">JFT</p>
                        </div>
                    </div>
                </div>
                <div class="income-dashone-pro">
                    <div class="income-rate-total">
                        <div class="price-adminpro-rate">
                            <h3><span class="counter"><?php echo $jpfu ?></span></h3>
                        </div>

                    </div>
                    <div class="income-range visitor-cl">
                        <p>Prosentase</p>
                        <span class="income-percentange">40% <i class="fa fa-level-up"></i></span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                <div class="income-title">
                    <div class="main-income-head">
                        <h5>Jumlah Pejabat</h5>
                        <div class="main-income-phara low-value-cl">
                            <p title="Pejabat Fungsional Umum">JFU</p>
                        </div>
                    </div>
                </div>
                <div class="income-dashone-pro">
                    <div class="income-rate-total">
                        <div class="price-adminpro-rate">
                            <h3><span class="counter"><?php echo $jpfu ?></span></h3>
                        </div>
                        
                    </div>
                    <div class="income-range low-value-cl">
                        <p>Prosentase</p>
                        <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="feed-mesage-project-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="sparkline11-list shadow-reset mg-tb-30">
          <div class="sparkline11-hd">
            <div class="main-sparkline11-hd">
                <h1>Struktural</h1>
                <div class="sparkline11-outline-icon">
                    <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                    <span><i class="fa fa-wrench"></i></span>
                    <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                </div>
            </div>
          </div>
          <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
            <?php foreach($struktural as $s){?>
            <div class="daily-feed-list">
              <div class="daily-feed-img">
                <img src="<?php echo base_url()?>assets/img/notification/1.jpg" width="90px" alt="" />
              </div>
              <div class="daily-feed-content">
                  <h4><span class="feed-author"><?php echo $s->nama ?></span></h4>
                  <p class="res-ds-n-t"><?php echo $s->nip ?></p>
                  <p class="res-ds-n-t">TMT CPNS : <?php echo $s->tmt_cpns ?></p>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sparkline11-list shadow-reset mg-tb-30">
          <div class="sparkline11-hd">
            <div class="main-sparkline11-hd">
                <h1>Fungsional Umum</h1>
                <div class="sparkline11-outline-icon">
                    <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                    <span><i class="fa fa-wrench"></i></span>
                    <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                </div>
            </div>
          </div>
          <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
            <?php foreach($jfu as $j){ ?>
            <div class="daily-feed-list">
              <div class="daily-feed-img">
                  <img src="<?php echo base_url()?>assets/img/notification/1.jpg" width="90px" alt="" />
              </div>
              <div class="daily-feed-content">
                  <h4><span class="feed-author"><?php echo $j->nama ?></span></h4>
                  <p class="res-ds-n-t"><?php echo $j->nip ?></p>
                  <p class="res-ds-n-t">TMT CPNS : <?php echo $j->tmt_cpns ?></p>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sparkline11-list shadow-reset mg-tb-30">
          <div class="sparkline11-hd">
            <div class="main-sparkline11-hd">
                <h1>Fungsional Tertentu</h1>
                <div class="sparkline11-outline-icon">
                    <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                    <span><i class="fa fa-wrench"></i></span>
                    <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                </div>
            </div>
          </div>
          <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
            <?php foreach($jft as $t){ ?>
            <div class="daily-feed-list">
              <div class="daily-feed-img">
                  <img src="<?php echo base_url()?>assets/img/notification/1.jpg" width="90px" alt="" />
              </div>
              <div class="daily-feed-content">
                  <h4><span class="feed-author"><?php echo $t->nama ?></span></h4>
                  <p class="res-ds-n-t"><?php echo $t->nip ?></p>
                  <p class="res-ds-n-t">TMT CPNS : <?php echo $t->tmt_cpns ?></p>
              </div>
            </div>
          <?php  } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  Highcharts.chart('jpkp', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah Pegawai Berdasarkan KP',
        style: {
                  fontSize: '10px',
                  fontFamily: 'Verdana, sans-serif'
             }
    },
    subtitle: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
    },
    credits: {
            enabled: false
        },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
      name: 'APBD',
      data: [
          <?php
          if(count($hitung_kp)>0)
          {
             foreach ($hitung_kp as $data) {
             echo "['" .$data->jenis_kp . "'," . $data->jp ."],\n";
             }
          }
          ?>
      ]
    }]
  });
</script>
