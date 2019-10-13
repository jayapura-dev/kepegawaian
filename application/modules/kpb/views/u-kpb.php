<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <div class="row">
              <div class="col-lg-12">
                  <div class="all-form-element-inner">
                      <form action="<?php echo base_url()?>kpb/update_kpb_proses" method="post">
                         <div class="form-group-inner">
                          <div class="row">
                              <div class="col-lg-2">
                                  <label class="login2 pull-right pull-right-pro">Pejabat</label>
                              </div>
                              <div class="col-lg-10">
                                  <input name="id_kpb" type="hidden" id="xid_kpb" class="form-control" />
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
                                 <input name="tgl_sk" type="date" id="xtgl_sk" class="form-control" required="true" placeholder="Tanggal SK" />
                             </div>
                         </div>
                       </div>
                       <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="login2 pull-right pull-right-pro">PL / PB / TMT PB</label>
                            </div>
                            <div class="col-lg-3">
                                <input name="pkt_lama" type="text" id="xpkt_lama" readonly="true" class="form-control" />
                            </div>
                            <div class="col-lg-4">
                              <select name="id_pangkat" class="form-control" id="xid_pangkat" required="true">
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
                                <input name="tmt_kpb" type="date" id="xtmt_kpb" class="form-control" required="true"/>
                            </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                       <div class="row">
                           <div class="col-lg-2">
                               <label class="login2 pull-right pull-right-pro">keterangan</label>
                           </div>
                           <div class="col-lg-10">
                               <input name="ket_kpb" type="text" id="xket_kpb" class="form-control" />
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
