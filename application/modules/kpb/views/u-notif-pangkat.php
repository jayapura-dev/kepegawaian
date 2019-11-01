<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>kpb/update_notif_proses" method="post">
                  <br/>
                  <div class="col-md-12">
                    <div class="row">
                      <input name="id_pegawai" id="idpegawai" type="hidden" class="form-control" />


                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Notif</label>
                       </div>
                       <div class="col-lg-2">
                           <input type="radio" value="aktif" name="notifikasi"> <i></i>On</label>
                       </div>
                       <div class="col-lg-2">
                           <input type="radio" value="nonaktif" name="notifikasi"> <i></i>Off</label>
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Keterangan</label>
                      </div>
                      <div class="col-lg-9">
                          <input name="ket" type="text" class="form-control" />
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
