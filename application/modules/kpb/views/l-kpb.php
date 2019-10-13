<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Pangkat</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Cari Pangkat</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="button-adminpro-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="button-ad-wrap shadow-reset nt-mg-b-30">
          <div class="alert-title">
              <h2><strong>Laporan Kenaikan Pangkat Berkala</strong></h2>
              <br/>
              <p class="alert alert-success">
                <strong>Cari Data Kenaikan Pangkat Berdasarkan Range Tanggal / Waktu</strong>
              </p>
              <hr/>
          </div>
          <form class="" action="<?php echo base_url()?>kpb/result_kpb" method="post">
            <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-2">
                      <label class="login2 pull-right pull-right-pro">Tanggal</label>
                  </div>
                  <div class="col-lg-3">
                    <input name="dari_tgl" type="date" class="form-control" />
                  </div>
                  <div class="col-lg-1">
                      <label class="login2 pull-right pull-right-pro">SD</label>
                  </div>
                  <div class="col-lg-3">
                    <input name="smp_tgl" type="date" class="form-control" />
                  </div>
              </div>
           </div>
            <div class="form-group-inner">
               <div class="row">
                 <div class="col-lg-2">
                 </div>
                 <div class="col-lg-6">
                   <input type="submit" class="btn btn-primary" value="Cari" />

                 </div>
                 <div class="col-lg-1">

                 </div>
               </div>
           </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
