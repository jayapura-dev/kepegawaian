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
                            <li><a href="<?php echo base_url()?>pegawai/">Pegawai</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="<?php echo base_url()?>pegawai/detail_pegawai/<?php echo $detail['id_pegawai'] ?>">Detail Pegawai</a> <span class="bread-slash">/</span>
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
                Apakah Anda Yakin Ingin Menghapus Data Pejabat ini ??? <br/>
                Dengan Menghapus data Pejabat ini Anda akan menghapus Semua item yang berelasi dengan Data Pejabat ini : <br/>
                Yang ikut terhapus adalah :<br/>
                <strong>1. Data KPB </strong><br/>
                <strong>2. Data KGB</strong><br/>
                <strong>3. Data Ijin Belajar</strong><br/>
                <strong>4. Data Tugas Belajar</strong><br/>
                <strong>5. Data Jabatan</strong><br/>
              </p>

              <hr/>
              <form class="" action="<?php echo base_url()?>pegawai/delete_pegawai_proses" method="post">
                <input type="hidden" name="id_pegawai" value="<?php echo $detail['id_pegawai'] ?>">
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Nama</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="kegiatan" type="text" readonly="true" value="<?php echo $detail['nama'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">NIP</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="kegiatan" type="text" readonly="true" value="<?php echo $detail['nip'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
                <div class="form-group-inner">
                   <div class="row">
                     <div class="col-lg-2">
                     </div>
                     <div class="col-lg-6">
                       <input type="submit" class="btn btn-primary" value="Hapus" />
                       <a href="<?php echo base_url()?>pegawai/detail_pegawai/<?php echo $detail['id_pegawai'] ?>" type="button" class="btn btn-default"> Batal</a>
                     </div>
                     <div class="col-lg-1">

                     </div>
                   </div>
               </div>
              </form>
          </div>
          <hr/>
        </div>
      </div>
    </div>
  </div>
</div>
