<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <div class="row">
              <div class="col-lg-12">
                  <div class="all-form-element-inner">
                      <form action="<?php echo base_url()?>ib/updatefile_ijin_proses" method="post" enctype="multipart/form-data">
                        <div class="form-group-inner">
                           <div class="row">
                               <div class="col-lg-2">
                                   <label class="login2 pull-right pull-right-pro">Nama</label>
                               </div>
                               <div class="col-lg-10">
                                   <input name="nama" type="text" id="xnama" readonly="true" class="form-control" />
                               </div>
                           </div>
                         </div>
                         <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="login2 pull-right pull-right-pro">File</label>
                                </div>
                                <div class="col-lg-10">
                                    <input name="id_ijin" type="hidden" id="xid_ijin" class="form-control" />
                                    <input type="file" name="dok_ijin" id="xdok_ijin" class="form-control">
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
