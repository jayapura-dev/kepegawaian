<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <div class="row">
              <div class="col-lg-12">
                  <div class="all-form-element-inner">
                      <form action="<?php echo base_url()?>jabatan/updatefile_jabatan_proses" method="post" enctype="multipart/form-data">
                        <div class="form-group-inner">
                           <div class="row">
                               <div class="col-lg-2">
                                   <label class="login2 pull-right pull-right-pro">Nama</label>
                               </div>
                               <div class="col-lg-10">
                                   <input name="nama" type="text" id="xxnama" readonly="true" class="form-control" />
                               </div>
                           </div>
                         </div>
                         <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="login2 pull-right pull-right-pro">File</label>
                                </div>
                                <div class="col-lg-10">
                                    <input name="id_jp" type="hidden" id="xxid_jp" class="form-control" />
                                    <input type="file" name="dok_jabatan" id="xxdok_jabatan" class="form-control">
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
