<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>pegawai/update_foto_proses" method="post" enctype="multipart/form-data">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro"></label>
                                        </div>
                                        <div class="col-lg-9">
                                          <input name="id_pegawai" type="text" id="xxid_pegawai" class="form-control" />
                                          <input name="path_foto" id="xxpath_foto" type="file" class="form-control" />
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
</div>
