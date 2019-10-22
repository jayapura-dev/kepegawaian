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
            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                <div class="income-title">
                    <div class="main-income-head">
                        <h5>Jumlah Pejabat</h5>
                        <div class="main-income-phara">
                            <p>BKKSDA</p>
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
                            <p>Fungsional Tertentu</p>
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
                            <p>Fungsional Umum</p>
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
