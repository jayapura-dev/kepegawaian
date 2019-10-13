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
                                <li><a href="#">Pensiun</a> <span class="bread-slash">/</span>
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

<div class="button-adminpro-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="button-ad-wrap shadow-reset nt-mg-b-30">
          <div class="alert-title">
              <h2><strong>Tambah Data Pensiun !!</strong></h2>
              <p class="alert alert-warning">
                Dengan Menginput Data Pensiun Pejabat, Anda Telah Memindahkan Data ini kedalam Data Pensiun,
                Data ini akan tersimpan pada data Pensiun dan Akan dihapus dari Data Pejabat AKtif
              </p>
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
                    <h1><i class="fa fa-plus"></i> Tambah Pejabat Pensiun</h1>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>pensiun/create_pensiun_proses" method="post" enctype="multipart/form-data">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="id_pegawai" type="hidden" value="<?php echo $detail['id_pegawai'] ?>" class="form-control" />
                                            <input name="nama" type="text" value="<?php echo $detail['nama'] ?>" class="form-control" readonly="true" />
                                            <input type="hidden" name="path_foto" value="<?php echo $detail['path_foto'] ?>">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Nip</label>
                                       </div>
                                       <div class="col-lg-4">
                                           <input name="nip" type="text" value="<?php echo $detail['nip'] ?>" class="form-control" readonly="true" />
                                       </div>
                                       <div class="col-lg-4">
                                           <input name="tgl_lahir" type="text" value="<?php echo $detail['tgl_lahir'] ?>" class="form-control" readonly="true" />
                                       </div>

                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">TMT CPNS</label>
                                      </div>
                                      <div class="col-lg-4">
                                          <input type="text" name="tmt_cpns" value="<?php echo $detail['tmt_cpns'] ?>" class="form-control" readonly="true" />
                                      </div>
                                      <div class="col-lg-4">
                                        <input name="jekel" type="text" value="<?php echo $detail['jekel'] ?>" class="form-control" readonly="true"/>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Pend.Terahir</label>
                                     </div>
                                     <div class="col-lg-4">
                                       <input type="text" name="pend_terahir" value="<?php echo $detail['pend_terahir'] ?>" class="form-control" readonly="true" />
                                     </div>
                                     <div class="col-lg-1">
                                         <label class="login2 pull-right pull-right-pro">Bidang</label>
                                     </div>
                                     <div class="col-lg-4">
                                         <input name="bidang" type="text" class="form-control" value="<?php echo $detail['bidang'] ?>" readonly="true" />
                                     </div>
                                 </div>
                               </div>

                              <div class="form-group-inner">
                               <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Jenis KP</label>
                                   </div>
                                   <div class="col-lg-4">
                                     <input type="text" name="id_kp" value="<?php echo $detail['jenis_kp'] ?>" class="form-control" readonly="true">
                                     <input type="hidden" name="id_kp" value="<?php echo $detail['id_kp'] ?>">
                                   </div>
                               </div>
                             </div>
                               <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">Jabatan</label>
                                    </div>
                                    <div class="col-lg-4">
                                      <input type="text" name="jabatan" value="<?php echo $detail['jabatan'] ?>" class="form-control" readonly="true">
                                      <input type="hidden" name="id_jabatan" value="<?php echo $detail['id_jabatan'] ?>">
                                    </div>
                                    <div class="col-lg-1">
                                        <label class="login2 pull-right pull-right-pro">TMT</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input name="tmt_jbt" type="text" value="<?php echo $detail['tmt_jbt'] ?>" class="form-control" readonly="true"/>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group-inner">
                               <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Pangkat/Gol</label>
                                   </div>
                                   <div class="col-lg-4">
                                     <input type="hidden" name="id_pangkat" value="<?php echo $detail['id_pangkat'] ?>" >
                                     <input type="text" name="pangkat" value="<?php echo $detail['pangkat'] ?>" class="form-control" readonly="true">
                                   </div>
                                   <div class="col-lg-1">
                                       <label class="login2 pull-right pull-right-pro">TMT</label>
                                   </div>
                                   <div class="col-lg-3">
                                       <input name="tmt_pkt" type="text" value="<?php echo $detail['tmt_pkt'] ?>" class="form-control" readonly="true" />
                                   </div>
                               </div>
                             </div>
                              <div class="form-group-inner">
                               <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Gaji Pokok</label>
                                   </div>
                                   <div class="col-lg-4">
                                      <input name="gapok_pegawai" type="text" value="<?php echo $detail['gapok_pegawai'] ?>" class="form-control" readonly="true" />
                                   </div>
                                   <div class="col-lg-1">
                                       <label class="login2 pull-right pull-right-pro" >TMT</label>
                                   </div>
                                   <div class="col-lg-3">
                                       <input name="tmt_gapok" type="text" value="<?php echo $detail['tmt_gapok'] ?>" readonly="trus" class="form-control" />
                                   </div>
                               </div>
                             </div>
                             <div class="form-group-inner">
                              <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">Unit Kerja</label>
                                  </div>
                                  <div class="col-lg-4">
                                    <input type="hidden" name="id_unit" value="<?php echo $detail['id_unit'] ?>" class="form-control">
                                    <input type="text" name="unit_kerja" value="<?php echo $detail['unit_kerja'] ?>" class="form-control" readonly="true">
                                  </div>
                              </div>
                            </div>
                              <hr/>
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
                                      <label class="login2 pull-right pull-right-pro">Keterangan</label>
                                  </div>
                                  <div class="col-lg-5">
                                      <input name="ket_pensiun" type="text" class="form-control" />
                                  </div>
                              </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">File</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input name="dok_pensiun" type="file" class="form-control" required="true"/>
                                    </div>
                                </div>
                              </div>
                              <div class="form-group-inner">
                               <div class="row">
                                 <div class="col-lg-2">
                                 </div>
                                 <div class="col-lg-2">
                                   <input type="submit" class="btn btn-primary" value="Simpan">
                                   <a class="btn btn-danger" href="<?php echo base_url()?>pensiun">Batal</a>
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
