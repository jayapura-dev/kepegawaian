<div class="basic-login-form-ad">
    <div class="row">
      <div class="container-fluid">
        <div class="col-lg-12">
          <div class="all-form-element-inner">
            <div class="row">
              <div class="col-lg-12">
                <div class="all-form-element-inner">
                    <form action="<?php echo base_url()?>pensiun/update_pensiun_proses" method="post" enctype="multipart/form-data">
                       <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="login2 pull-right pull-right-pro">Nama</label>
                            </div>
                            <div class="col-lg-9">
                                <input name="id_pegawai" id="xid_pegawai" type="hidden" class="form-control" />
                                <input name="nama" type="text" id="xnama" class="form-control" readonly="true" />
                            </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                       <div class="row">
                           <div class="col-lg-2">
                               <label class="login2 pull-right pull-right-pro">Nip</label>
                           </div>
                           <div class="col-lg-4">
                               <input name="nip" type="text" id="xnip" class="form-control" readonly="true" />
                           </div>
                           <div class="col-lg-4">
                               <input name="tgl_lahir" type="text" id="xtgl_lahir" class="form-control" readonly="true" />
                           </div>

                       </div>
                     </div>
                     <div class="form-group-inner">
                      <div class="row">
                          <div class="col-lg-2">
                              <label class="login2 pull-right pull-right-pro">TMT CPNS</label>
                          </div>
                          <div class="col-lg-4">
                              <input type="text" name="tmt_cpns" id="tmt_cpns" class="form-control" readonly="true" />
                          </div>
                          <div class="col-lg-4">
                            <input name="jekel" type="text" id="xjekel" class="form-control" readonly="true"/>
                          </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                     <div class="row">
                         <div class="col-lg-2">
                             <label class="login2 pull-right pull-right-pro">Pend.Terahir</label>
                         </div>
                         <div class="col-lg-4">
                           <input type="text" name="pend_terahir" id="xpend_terahir" class="form-control" readonly="true" />
                         </div>
                         <div class="col-lg-1">
                             <label class="login2 pull-right pull-right-pro">Bidang</label>
                         </div>
                         <div class="col-lg-4">
                             <input name="bidang" type="text" class="form-control" id="xbidang" readonly="true" />
                         </div>
                     </div>
                   </div>

                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Jenis KP</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="text" name="kp" id="jenis_kp" class="form-control" readonly="true">
                         <input type="hidden" name="id_kp" id="id_kp">
                       </div>
                   </div>
                 </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Jabatan</label>
                        </div>
                        <div class="col-lg-4">
                          <input type="text" name="jabatan" id="jabatan" class="form-control" readonly="true">
                          <input type="hidden" name="id_jabatan" id="id_jabatan">
                        </div>
                        <div class="col-lg-1">
                            <label class="login2 pull-right pull-right-pro">TMT</label>
                        </div>
                        <div class="col-lg-3">
                            <input name="tmt_jbt" type="text" id="tmt_jbt" class="form-control" readonly="true"/>
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Pangkat/Gol</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="hidden" name="id_pangkat" id="id_pangkat" >
                         <input type="text" name="pangkat" id="pangkat" class="form-control" readonly="true">
                       </div>
                       <div class="col-lg-1">
                           <label class="login2 pull-right pull-right-pro">TMT</label>
                       </div>
                       <div class="col-lg-3">
                           <input name="tmt_pkt" type="text" id="tmt_pkt" class="form-control" readonly="true" />
                       </div>
                   </div>
                 </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Gaji Pokok</label>
                       </div>
                       <div class="col-lg-4">
                          <input name="gapok_pegawai" type="text" id="gapok_pegawai" class="form-control" readonly="true" />
                       </div>
                       <div class="col-lg-1">
                           <label class="login2 pull-right pull-right-pro" >TMT</label>
                       </div>
                       <div class="col-lg-3">
                           <input name="tmt_gapok" type="text" id="tmt_gapok" readonly="trus" class="form-control" />
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Unit Kerja</label>
                      </div>
                      <div class="col-lg-4">
                        <input type="hidden" name="id_unit" id="id_unit" class="form-control">
                        <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" readonly="true">
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
                           <input name="no_sk" type="text" id="no_sk" class="form-control" />
                       </div>
                       <div class="col-lg-5">
                           <input name="tgl_sk" type="date" id="tgl_sk" class="form-control" required="true" placeholder="Tanggal SK" />
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Keterangan</label>
                      </div>
                      <div class="col-lg-5">
                          <input name="ket_pensiun" type="text" id="ket_pensiun" class="form-control" />
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
