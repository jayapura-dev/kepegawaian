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
                            <li><a href="<?php echo base_url()?>ib">Ijin Belajar</a> <span class="bread-slash">/</span>
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
              </p>

              <hr/>
              <form class="" action="<?php echo base_url()?>ib/delete_ijin_proses" method="post">
                <input type="hidden" name="id_ijin" value="<?php echo $detail['id_ijin'] ?>">
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
                         <label class="login2 pull-right pull-right-pro">No SK</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="pkt_lama" type="text" readonly="true" value="<?php echo $detail['no_sk'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tgl SK</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="jabatan" type="text" readonly="true" value="<?php echo $detail['tgl_sk'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">TMT Awal</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="tmt_jabatan" type="text" readonly="true" value="<?php echo $detail['tmt_awal'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">TMT Akhir</label>
                     </div>
                     <div class="col-lg-9">
                       <input name="no_sk" type="text" readonly="true" value="<?php echo $detail['tmt_akhir'] ?>" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-2">
                        <?php if($detail['dok_ijin'] != ''){ ?>
                          <img src="<?php echo base_url()?>images/ijin_belajar/<?php echo $detail['dok_ijin'] ?>" alt="" width="300px">
                        <?php } ?>
                    </div>
                </div>
               </div>
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
