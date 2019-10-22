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
                                <li><a href="#">Ijin Belajar</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h4><i class="fa fa-plus-circle"></i> Tambah Data Ijin Belajar</h4>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>ib/create_ijin_proses" method="post" enctype="multipart/form-data">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Pejabat</label>
                                        </div>
                                        <div class="col-lg-8">
                                          <input type="text" readonly="true" name="nama" class="form-control" value="<?php echo $detail['nama'] ?>">
                                          <input type="hidden" name="id_pegawai" value="<?php echo $detail['id_pegawai'] ?>">
                                          <input type="hidden" name="id_jenjang" value="<?php echo $detail['id_jenjang'] ?>">
                                        </div>
                                    </div>
                                  </div>

                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">TMT Awal</label>
                                       </div>
                                       <div class="col-lg-3">
                                         <input type="text" readonly="true" name="tmt_awal" value="<?php echo $detail['tgl_awal'] ?>" class="form-control">
                                       </div>
                                       <div class="col-lg-1">
                                           <label class="login2 pull-right pull-right-pro">Akhir</label>
                                       </div>
                                       <div class="col-lg-4">
                                         <input type="date" name="tmt_akhir" class="form-control">
                                       </div>
                                   </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Lokasi</label>
                                       </div>
                                       <div class="col-lg-3">
                                         <input type="text" name="lokasi_pdk" class="form-control">
                                       </div>
                                       <div class="col-lg-1">
                                           <label class="login2 pull-right pull-right-pro">Lembaga</label>
                                       </div>
                                       <div class="col-lg-4">
                                         <input type="text" name="lembaga" class="form-control">
                                       </div>
                                   </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">No SK</label>
                                       </div>
                                       <div class="col-lg-3">
                                           <input name="no_sk" type="text" class="form-control" />
                                       </div>
                                       <div class="col-lg-1">
                                           <label class="login2 pull-right pull-right-pro">TMT SK</label>
                                       </div>
                                       <div class="col-lg-4">
                                           <input name="tgl_sk" type="date" class="form-control" required="true" placeholder="Tanggal SK" />
                                       </div>
                                   </div>
                                 </div>
                               <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">File</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input name="dok_ijin" type="file" class="form-control" required="true"/>
                                    </div>
                                </div>
                              </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Simpan">
                                     <a class="btn btn-danger" href="<?php echo base_url()?>ib">Batal</a>
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
    </div>
  </div>
</div>
<br/>
