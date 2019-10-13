<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <div class="row">
              <div class="col-lg-12">
                  <div class="all-form-element-inner">
                      <form action="<?php echo base_url()?>kgb/update_kgb_proses" method="post">
                         <div class="form-group-inner">
                          <div class="row">
                              <div class="col-lg-2">
                                  <label class="login2 pull-right pull-right-pro">Pejabat</label>
                              </div>
                              <div class="col-lg-10">
                                  <input name="id_kgb" type="hidden" id="xid_kgb" class="form-control" />
                                  <input name="id_pegawai" type="hidden" id="xid_pegawai" class="form-control" />
                                  <input name="nama" type="text" readonly="true" id="xnama" class="form-control" />
                              </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                         <div class="row">
                             <div class="col-lg-2">
                                 <label class="login2 pull-right pull-right-pro">No SK</label>
                             </div>
                             <div class="col-lg-5">
                                 <input name="no_sk" type="text" id="xno_sk" class="form-control" />
                             </div>
                             <div class="col-lg-5">
                                 <input name="tgl_sk" type="date" id="xtgl_sk" class="form-control" required="true" />
                             </div>
                         </div>
                       </div>
                       <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="login2 pull-right pull-right-pro">GL / GB / TMT KGB</label>
                            </div>
                            <div class="col-lg-3">
                                <input name="gapok_lama" type="text" id="xgapok_lama" readonly="true" class="form-control" />
                            </div>

                            <div class="col-lg-4">
                                <input name="gapok_baru" type="text" id="xgapok_baru" class="form-control" required="true"/>
                            </div>
                            <div class="col-lg-3">
                                <input name="tmt_kgb" type="date" id="xtmt_kgb" class="form-control" required="true"/>
                            </div>
                        </div>
                      </div>

                      <div class="form-group-inner">
                       <div class="row">
                         <div class="col-lg-2">
                         </div>
                         <div class="col-lg-2">
                           <input type="submit" class="btn btn-primary" value="Simpan">
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
