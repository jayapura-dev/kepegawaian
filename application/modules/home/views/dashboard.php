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
                        <div class="price-graph">
                            <span id="sparkline1"></span>
                        </div>
                    </div>
                    <div class="income-range">
                        <h5>Prosentase</h5>
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
                        <div class="price-graph">
                            <span id="sparkline6"></span>
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
                        <div class="price-graph">
                            <span id="sparkline2"></span>
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
                        <div class="price-graph">
                            <span id="sparkline5"></span>
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
