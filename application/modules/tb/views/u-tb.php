<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <div class="row">
            <div class="col-lg-12">
              <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>tb/update_tgs_proses" method="post" enctype="multipart/form-data">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Pejabat</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="hidden" name="id_tgs" id="id_tgs">
                          <select name="id_pegawai" class="form-control" id="id_pegawai">
                              <option value="">-- Pilih --</option>
                               <?php
                               foreach($pegawai as $j => $val)
                               {?>
                               <option value="<?php echo $val->id_pegawai;?>"><?php echo $val->nama; ?></option>
                               <?php
                               }?>
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Jenjang</label>
                       </div>
                       <div class="col-lg-6">
                         <select name="id_jenjang" class="form-control" id="id_jenjang">
                             <option value="">-- Pilih --</option>
                              <?php
                              foreach($jenjang as $j => $val)
                              {?>
                              <option value="<?php echo $val->id_jenjang;?>"><?php echo $val->jenjang; ?></option>
                              <?php
                              }?>
                         </select>
                       </div>
                   </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">TMT Awal</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="date" name="tmt_awal" class="form-control" id="tmt_awal">
                       </div>
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Akhir</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="date" name="tmt_akhir" class="form-control" id="tmt_akhir">
                       </div>
                   </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Lokasi</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="text" name="lokasi_pdk" id="lokasi_pdk" class="form-control">
                       </div>
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Lembaga</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="text" name="lembaga" class="form-control" id="lembaga">
                       </div>
                   </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">No SK</label>
                       </div>
                       <div class="col-lg-4">
                           <input name="no_sk" type="text" id="no_sk" class="form-control" />
                       </div>
                       <div class="col-lg-3">
                           <input name="tgl_sk" type="date" class="form-control" id="tgl_sk" required="true" placeholder="Tanggal SK" />
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
