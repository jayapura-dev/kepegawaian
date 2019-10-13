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

                                <li><span class="bread-blod">Cari KP</span>
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
          <br/>
          <table class="small table table-bordered">
            <thead>
              <tr class="small">
                <th>No</th>
                <th>Nama Pejabat</th>
                <th>Dari Pangkat</th>
                <th>Menjadi</th>
                <th>No / Tgl SK</th>
                <th>TMT</th>
                <th>File</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach($result as $item){?>
                <tr class="small">
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $item->nama ?> <br/> <?php echo $item->nip ?></td>
                  <td><?php echo $item->pkt_lama ?></td>
                  <td><?php echo $item->pangkat ?></td>
                  <td><?php echo $item->no_sk ?> <br/> <?php echo $item->tgl_sk ?></td>
                  <td><?php echo $item->tmt_kpb ?></td>
                  <td><a href="<?php echo base_url()?>images/kpb/<?php echo $item->dok_kpb ?>" target="_blank"><i class="fa fa-file"></i></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
