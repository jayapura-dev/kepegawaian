<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>

<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <div class="row">
            <div class="col-lg-12">
              <div class="all-form-element-inner">
                  <form action="<?php echo base_url()?>jabatan/update_jabatan_proses" method="post" enctype="multipart/form-data">
                     <div class="form-group-inner">
                      <div class="row">
                          <div class="col-lg-2">
                              <label class="login2 pull-right pull-right-pro">Pejabat</label>
                          </div>
                          <div class="col-lg-10">
                              <input name="id_jp" type="hidden" id="id_jp" class="form-control" />
                              <input name="id_pegawai" type="hidden" id="id_pegawai" class="form-control" />
                              <input name="nama" type="text" id="nama" readonly="true" class="form-control" />
                          </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                     <div class="row">
                         <div class="col-lg-2">
                             <label class="login2 pull-right pull-right-pro">No SK</label>
                         </div>
                         <div class="col-lg-4">
                             <input name="no_sk" type="text" class="form-control" id="no_sk" required="true" />
                         </div>
                         <div class="col-lg-3">
                             <input name="tgl_sk" type="date" class="form-control" id="tgl_sk" required="true" />
                         </div>
                         <div class="col-lg-3">
                             <input name="jbt_lama" type="text" class="form-control" id="jbt_lama" readonly="true" />
                         </div>
                     </div>
                   </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">KP / Jabatan / TMT</label>
                        </div>
                        <div class="col-lg-3">
                          <select name="id_kp" class="form-control" id="id_kp">
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
                          <select class="form-control" name="id_jabatan" id="id_jabatan">

                          </select>
                        </div>
                        <div class="col-lg-3">
                          <input type="date" name="tmt_menjabat" id="tmt_menjabat" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">keterangan</label>
                       </div>
                       <div class="col-lg-10">
                           <input name="ket_menjabat" id="ket_menjabat" type="text" class="form-control" />
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
