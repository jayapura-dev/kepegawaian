<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>

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
                                <li><a href="#">Gaji</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>kgb/usulan_kgb">Usulan Kenaikan Gaji</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah KGB</span>
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
                    <h4><i class="fa fa-plus-circle"></i> Tambah data Kenaikan Kenaikan Gaji Berkala Pejabat</h4>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>kgb/create_kgb_proses" method="post" enctype="multipart/form-data">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Pejabat</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input name="id_pegawai" type="hidden" value="<?php echo $detail['id_pegawai'] ?>" class="form-control" />
                                            <input name="nama" type="text" value="<?php echo $detail['nama'] ?>" readonly="true" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">No SK</label>
                                       </div>
                                       <div class="col-lg-5">
                                           <input name="no_sk" type="text" class="form-control" />
                                       </div>
                                       <div class="col-lg-5">
                                           <input name="tgl_sk" type="date" class="form-control" required="true" placeholder="Tanggal SK" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">GL / GB / TMT GB</label>
                                      </div>
                                      <div class="col-lg-3">
                                          <input name="gapok_lama" type="text" value="<?php echo number_format($detail['gapok_pegawai']) ?>" readonly="true" class="form-control" />
                                      </div>
                                      <div class="col-lg-4">
                                          <input name="gapok_baru" type="text" class="form-control money" required="true"/>
                                      </div>
                                      <div class="col-lg-3">
                                          <input name="tmt_kgb" type="date" class="form-control" required="true"/>
                                      </div>
                                  </div>
                                </div>
                               <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">File</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input name="dok_kgb" type="file" class="form-control" required="true"/>
                                    </div>
                                </div>
                              </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Simpan">
                                     <a class="btn btn-danger" href="<?php echo base_url()?>kgb/usulan_kgb">Batal</a>
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
