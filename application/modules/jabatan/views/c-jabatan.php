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
                                <li><a href="#">Jabatan</a> <span class="bread-slash">/</span>
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
<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h4><i class="fa fa-plus-circle"></i> Tambah Data Jabatan</h4>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>jabatan/create_jabatan_proses" method="post" enctype="multipart/form-data">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Pejabat</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input name="id_pegawai" type="hidden" value="<?php echo $detail['id_pegawai'] ?>" class="form-control" />
                                            <input name="nama" type="text" value="<?php echo $detail['nama'] ?>" readonly="true" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">No SK</label>
                                       </div>
                                       <div class="col-lg-4">
                                           <input name="no_sk" type="text" class="form-control" />
                                       </div>
                                       <div class="col-lg-3">
                                           <input name="tgl_sk" type="date" class="form-control" required="true" placeholder="Tanggal SK" />
                                       </div>
                                       <div class="col-lg-3">
                                           <input name="jbt_lama" type="text" class="form-control" readonly="true" value="<?php echo $detail['jabatan'] ?>" placeholder="Tanggal SK" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">KP / Jabatan / TMT</label>
                                      </div>
                                      <div class="col-lg-3">
                                        <select name="id_kp" class="form-control">
                                            <option value="">-- Pilih --</option>
                                             <?php
                                             foreach($kp as $j => $val)
                                             {?>
                                             <option value="<?php echo $val->id_kp;?>"><?php echo $val->jenis_kp; ?></option>
                                             <?php
                                             }?>
                                        </select>
                                      </div>
                                      <div class="col-lg-4">
                                        <select class="form-control" name="id_jabatan">

                                        </select>
                                      </div>
                                      <div class="col-lg-3">
                                        <input type="date" name="tmt_menjabat" class="form-control">
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">keterangan</label>
                                     </div>
                                     <div class="col-lg-10">
                                         <input name="ket_menjabat" type="text" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                               <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">File</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input name="dok_jabatan" type="file" class="form-control" required="true"/>
                                    </div>
                                </div>
                              </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Simpan">
                                     <a class="btn btn-danger" href="<?php echo base_url()?>kpb">Batal</a>
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
<br/>

<script type="text/javascript">
  $('select[name="id_kp"]').on('change', function() {
      var id_kp = $(this).val();
      if(id_kp) {
          $.ajax({
              url: '<?php echo base_url("jabatan/get_jabatan/") ?>'+id_kp,
              type: "GET",
              dataType: "json",
              success:function(data) {
                  $('select[name="id_jabatan"]').empty();
                  $.each(data, function(key, value) {
                      $('select[name="id_jabatan"]').append('<option value="'+ value.id_jabatan +'">'+ value.jabatan+'</option>');
                  });
              }
          });
      }else{
          $('select[name="id_jabatan"]').empty();
      }
  });
</script>
