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
                                <li><a href="#">Reminder</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>kpb">Kenaikan Pangkat</a> <span class="bread-slash">/</span>
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
                    <h1><i class="fa fa-plus-circle"></i> Tambah Kenaikan Pangkat</h1>

                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>kpb/create_kpb_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Pejabat</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="id_pegawai" type="hidden" value="<?php echo $detail['id_pegawai'] ?>" class="form-control" />
                                            <input name="nama" type="text" value="<?php echo $detail['nama'] ?>" readonly="true" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Pangkat</label>
                                      </div>
                                      <div class="col-lg-4">
                                        <select name="id_pangkat" class="chosen-select form-control">
                                             <option value="">-- Pilih --</option>
                                              <?php
                                              foreach($pangkat as $p => $val)
                                              {?>
                                              <option value="<?php echo $val->id_pangkat;?>"><?php echo $val->pangkat; ?></option>
                                              <?php
                                              }?>
                                         </select>
                                      </div>
                                      <div class="col-lg-1">
                                          <label class="login2 pull-right pull-right-pro">TMT</label>
                                      </div>
                                      <div class="col-lg-3">
                                          <input name="tmt_kpb" type="date" class="form-control" />
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Simpan">
                                     <a class="btn btn-danger" href="<?php echo base_url()?>home">Batal</a>
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
