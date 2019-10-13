<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="breadcome-heading">

                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <ul class="breadcome-menu">
                            <li><a href="<?php echo base_url()?>kpb">KGB</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Hapus</span>
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
      <div class="col-lg-10">
        <div class="button-ad-wrap shadow-reset nt-mg-b-30">
          <div class="alert-title">
              <h2><strong>Hapus !!!</strong></h2>
              <br/>
              <p class="alert alert-warning">
                <strong>PERINGATAN !! :</strong><br/>
                Apakah Anda Yakin Ingin Menghapus Item ini ??? <br/>
                Jika Anda Menhapus Item ini Pastikan Anda Mengupdate <strong>TMT Kenaikan Gaji</strong> dan <strong>Gaji Pokok</strong> Pejabat Bersangkutan, pada <a href="<?php echo base_url()?>pegawai" target="_blank">Tabel Master Pejabat</a><br/>
                Atau Lihat <a href="<?php echo base_url()?>pegawai/detail_pegawai/<?php echo $detail['id_pegawai'] ?>" target="_blank"> Detail Pejabat</a>
              </p>

              <hr/>
              <form class="" action="<?php echo base_url()?>kgb/delete_kgb_proses" method="post">
                <input type="hidden" name="id_kgb" value="<?php echo $detail['id_kgb'] ?>">
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Nama</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="nama" type="text" readonly="true" value="<?php echo $detail['nama'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">NIP</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="nip" type="text" readonly="true" value="<?php echo $detail['nip'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Gapok Lama</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="pkt_lama" type="text" readonly="true" value="Rp. <?php echo number_format($detail['gapok_lama']) ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Gapok Baru</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="pangkat" type="text" readonly="true" value="Rp. <?php echo number_format($detail['gapok_baru']) ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">No SK</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="no_sk" type="text" readonly="true" value="<?php echo $detail['no_sk'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tgl SK</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="tgl_sk" type="text" readonly="true" value="<?php echo $detail['tgl_sk'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-2">
                        <?php if($detail['dok_kgb'] != ''){ ?>
                          <img src="<?php echo base_url()?>images/kgb/<?php echo $detail['dok_kgb'] ?>" alt="" width="300px">
                        <?php } ?>
                    </div>
                </div>
               </div>
               <hr/>
                <div class="form-group-inner">
                   <div class="row">
                     <div class="col-lg-2">
                     </div>
                     <div class="col-lg-6">
                       <input type="submit" class="btn btn-primary" value="Hapus" />

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
</div>
