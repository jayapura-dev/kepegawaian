<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <div class="row">
            <div class="col-lg-12">
              <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>ib/update_ijin_pegawai_proses" method="post" enctype="multipart/form-data">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Pejabat</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="hidden" name="id_pegawai" id="id_pegawai">
                          <input type="text" name="nama" id="nama" class="form-control">
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
                           <label class="login2 pull-right pull-right-pro">Tgl Awal</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
                       </div>
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Akhir</label>
                       </div>
                       <div class="col-lg-4">
                         <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
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
