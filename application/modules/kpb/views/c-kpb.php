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
                                <li><a href="<?php echo base_url()?>kpb/usulan_kp">Usulan KP</a> <span class="bread-slash">/</span>
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
                    <h4><i class="fa fa-plus-circle"></i> Tambah data Kenaikan Pangkat Pejabat</h4>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>kpb/create_kpb_proses" method="post" enctype="multipart/form-data">
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
                                           <input name="no_skp" type="text" class="form-control" />
                                       </div>
                                       <div class="col-lg-5">
                                           <input name="tgl_sk" type="date" class="form-control" required="true" placeholder="Tanggal SK" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">PL / PB / TMT PB</label>
                                      </div>
                                      <div class="col-lg-3">
                                          <input name="pkt_lama" type="text" value="<?php echo $detail['pangkat'] ?>" readonly="true" class="form-control" />
                                      </div>
                                      <div class="col-lg-4">
                                        <select name="id_pangkat" class="chosen-select form-control" required="true">
                                             <option value="">-- Pilih --</option>
                                              <?php
                                              foreach($pangkat as $p => $val)
                                              {?>
                                              <option value="<?php echo $val->id_pangkat;?>"><?php echo $val->pangkat; ?></option>
                                              <?php
                                              }?>
                                         </select>
                                      </div>
                                      <div class="col-lg-3">
                                          <input name="tmt_kpb" type="date" class="form-control" required="true"/>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">keterangan</label>
                                     </div>
                                     <div class="col-lg-10">
                                         <input name="ket_kpb" type="text" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                               <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">File</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input name="dok_kpb" type="file" class="form-control" required="true"/>
                                    </div>
                                </div>
                              </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Simpan">
                                     <a class="btn btn-danger" href="<?php echo base_url()?>kpb">Batal</a>
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
