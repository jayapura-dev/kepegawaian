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
                                <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>pegawai">Pegawai</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit</span>
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
                    <h1>Edit Pegawai</h1>
                    <div class="sparkline12-outline-icon">
                        <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                        <span><i class="fa fa-wrench"></i></span>
                        <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>pegawai/update_pegawai_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="nama" type="text" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Nip</label>
                                       </div>
                                       <div class="col-lg-4">
                                           <input name="nip" type="text" class="form-control" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">JK</label>
                                      </div>
                                      <div class="col-lg-4">
                                        <select name="jekel" class="form-control">
                                            <option value="L">LAKI-LAKI</option>
                                            <option value="P">PEREMPUAN</option>
                                        </select>
                                      </div>
                                  </div>
                                 </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Pend.Terahir</label>
                                     </div>
                                     <div class="col-lg-4">
                                       <select name="pend_terahir" class="form-control">
                                           <option value="SMA">SMA</option>
                                           <option value="D3">D3</option>
                                           <option value="S1">S1</option>
                                           <option value="S2">S2</option>
                                       </select>
                                     </div>
                                 </div>
                               </div>
                               <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">Pangkat/Gol</label>
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
                                        <input name="tmt_pkt" type="date" class="form-control" />
                                    </div>
                                </div>
                              </div>
                               <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">Jabatan</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <select name="id_jabatan" class="chosen-select form-control">
                                           <option value="">-- Pilih --</option>
                                            <?php
                                            foreach($jabatan as $j => $val)
                                            {?>
                                            <option value="<?php echo $val->id_jabatan;?>"><?php echo $val->jabatan; ?></option>
                                            <?php
                                            }?>
                                       </select>
                                    </div>
                                    <div class="col-lg-1">
                                        <label class="login2 pull-right pull-right-pro">TMT</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input name="tmt_jbt" type="date" class="form-control" />
                                    </div>
                                </div>
                              </div>
                              <div class="form-group-inner">
                               <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">TMT CPNS</label>
                                   </div>
                                   <div class="col-lg-4">
                                     <input type="date" name="tmt_cpns">
                                   </div>
                               </div>
                              </div>
                              <div class="form-group-inner">
                               <div class="row">
                                 <div class="col-lg-2">
                                 </div>
                                 <div class="col-lg-2">
                                   <input type="submit" class="btn btn-primary" value="Simpan">
                                   <a class="btn btn-danger" href="<?php echo base_url()?>pegawai">Batal</a>
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
