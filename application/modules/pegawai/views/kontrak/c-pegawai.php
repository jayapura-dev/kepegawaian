<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen/bootstrap-chosen.css">

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
                                <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>pegawai">Pegawai</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>pegawai/kontrak">Kontrak / PPPK</a> <span class="bread-slash">/</span>
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
                      <h1><i class="fa fa-plus"></i> Tambah Tenaga Kontrak / PPPK</h1>
                  </div>
              </div>
              <div class="sparkline12-graph">
                  <div class="basic-login-form-ad">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="all-form-element">
                                  <form action="<?php echo base_url()?>pegawai/create_kontrak_post" method="post">
                                      <div class="form-group">
                                         <div class="row">
                                             <div class="col-lg-2">
                                                 <label class="login2 pull-right pull-right-pro">Nama</label>
                                             </div>
                                             <div class="col-lg-9">
                                                 <input name="nama" type="text" class="form-control" />
                                                 <input name="status_pegawai" value="KONTRAK" type="hidden" class="form-control" />
                                             </div>
                                         </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Tgl Lahir</label>
                                            </div>
                                            <div class="col-lg-2">
                                                <input name="tgl_lahir" type="date" class="form-control" />
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Tmp Lahir</label>
                                            </div>
                                            <div class="col-lg-2">
                                                <input name="tmp_lahir" type="text" class="form-control" />
                                            </div>
                                            <div class="col-lg-1">
                                                <label class="login2 pull-right pull-right-pro">Jekel</label>
                                            </div>
                                            <div class="col-lg-2">
                                              <select name="jekel" class="form-control">
                                                   <option value="">-- Pilih --</option>
                                                   <option value="L">Pria</option>
                                                   <option value="P">Wanita</option>
                                               </select>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">Penempatan</label>
                                            </div>
                                            <div class="col-lg-2">
                                              <select name="id_penempatan" id="xpenempatan" class="form-control">
                                                   <option value="">-- Pilih --</option>
                                                   <option value="1">Struktural</option>
                                                   <option value="2">Fungsional</option>
                                               </select>
                                            </div>
                                            <div class="col-lg-4" id="xsekolah" hidden="true">
                                              <select class="chosen-select" name="id_sekolah">
                                                  <option value="">--- Pilih ---</option>
                                                  <?php
                                                  foreach($sek as $p)
                                                  {?>
                                                  <option value="<?php echo $p['id_sekolah'] ;?>"> (<?php echo $p['jenjang'] ?>) <?php echo $p['nama_sekolah']; ?></option>
                                                  <?php
                                                  }?>
                                              </select>
                                            </div>
                                            <div class="col-lg-3" id="xjabatan" hidden="true">
                                              <select name="id_jabatan" class="form-control">
                                                   <option value="">-- Pilih --</option>
                                                    <?php
                                                    foreach($jabatan as $p => $val)
                                                    {?>
                                                    <option value="<?php echo $val->id_jabatan;?>"><?php echo $val->jabatan; ?></option>
                                                    <?php
                                                    }?>
                                               </select>
                                            </div>
                                            <div class="col-lg-3" id="xbidang" hidden="true">
                                              <select name="id_pangkat" class="form-control">
                                                   <option value="">-- Pilih --</option>
                                                    <?php
                                                    foreach($bidang as $p => $val)
                                                    {?>
                                                    <option value="<?php echo $val->id_bidang;?>"><?php echo $val->bidang; ?></option>
                                                    <?php
                                                    }?>
                                               </select>
                                            </div>

                                        </div>
                                      </div>
                                      <div class="form-group-inner">
                                          <div class="row">
                                              <div class="col-lg-2">
                                                  <label class="login2 pull-right pull-right-pro">Guru</label>
                                              </div>
                                              <div class="col-lg-4">
                                                  <select class="form-control" id="xguru" name="guru">
                                                    <option value="">--- Pilih ---</option>
                                                    <option value="1">Pendidik</option>
                                                    <option value="2">Tenaga Pendidik</option>
                                                  </select>
                                              </div>
                                              <div class="col-lg-2" id="xjenjang" hidden="true">
                                                <select class="form-control" name="jenjang" onchange="get_mapel()" id="jenjang" readonly="True">

                                                </select>
                                              </div>
                                              <div class="col-lg-4" id="xxmapel" hidden="true">
                                                <select class="form-control" name="id_mapel" onchange="get_mapel()" >

                                                </select>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group-inner">
                                          <div class="row">
                                              <div class="col-lg-2">
                                                  <label class="login2 pull-right pull-right-pro">Etnis</label>
                                              </div>
                                              <div class="col-lg-4">
                                                  <select class="form-control" name="etnis">
                                                    <option value="">--- Pilih ---</option>
                                                    <option value="oap">OAP (Orang Asli Papua)</option>
                                                    <option value="non_oap">Non OAP</option>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group-inner">
                                          <div class="row">
                                              <div class="col-lg-2">
                                                  <label class="login2 pull-right pull-right-pro">Agama</label>
                                              </div>
                                              <div class="col-lg-6">
                                                  <select class="form-control" name="agama">
                                                      <option value="">--- Pilih ---</option>
                                                      <option value="Islam">Islam</option>
                                                      <option value="Protestan">Protestan</option>
                                                      <option value="Khatolik">Khatolik</option>
                                                      <option value="Budha">Budha</option>
                                                      <option value="Hindu">Hindu</option>
                                                      <option value="Khonghucu">Khonghucu</option>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group-inner">
                                          <div class="row">
                                              <div class="col-lg-2">
                                                  <label class="login2 pull-right pull-right-pro">Pend.Terahir</label>
                                              </div>
                                              <div class="col-lg-4">
                                                  <select name="pend_terahir" class="form-control">
                                                      <option value="SMA">SMA - Sederajat</option>
                                                      <option value="D1">D1 - Diploma-1</option>
                                                      <option value="D2">D2 - Diploma-2</option>
                                                      <option value="D3">D3 - Diploma-3</option>
                                                      <option value="S1">S1 - Strata-1</option>
                                                      <option value="S2">S2 - Strata-2</option>
                                                      <option value="S3">S3 - Strata-3</option>
                                                  </select>
                                              </div>
                                              <div class="col-lg-1">
                                                  <label class="login2 pull-right pull-right-pro">Kekhususan</label>
                                              </div>
                                              <div class="col-lg-4">
                                                  <input name="kekhususan" type="text" class="form-control" />
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </di>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url()?>assets/js/chosen/chosen.jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/chosen/chosen-active.js"></script>

<script type="text/javascript">
  $('#xpenempatan').change(function() {
    var penempatan = $(this).val();
    $('#xsekolah').prop('hidden', penempatan != '2');
    $('#xjabatan').prop('hidden', penempatan != '2');
    $('#xbidang').prop('hidden', penempatan != '1');
  });

  $('#xguru').change(function() {
    var guru = $(this).val();
    $('#xxmapel').prop('hidden', guru != '1');
    $('#xjenjang').prop('hidden', guru != '1');
  });

  $('select[name="id_sekolah"]').on('change', function() {
      var id_sekolah = $(this).val();
      if(id_sekolah) {
          $.ajax({
              url: 'http://localhost/sekolah/api/sekolah?id_sekolah='+id_sekolah,
              type: "GET",
              dataType: "json",
              success:function(data) {
                  $('select[name="jenjang"]').empty();
                  $.each(data.result, function(key, value) {
                      $('select[name="jenjang"]').append('<option value="'+ value.id_sekolah +'">'+ value.jenjang+'</option>');
                  });
              }
          });
      }else{
          $('select[name="jenjang"]').empty();
      }
  });

  $('select[name="jenjang"]').on('change', function() {
      var jenjang = $(this).val();
      if(jenjang) {
          $.ajax({
              url: 'http://localhost/sekolah/api/mapel?jenjang='+jenjang,
              type: "GET",
              dataType: "json",
              success:function(data) {
                  $('select[name="jenjang"]').empty();
                  $.each(data.result, function(key, value) {
                      $('select[name="id_mapel"]').append('<option value="'+ value.id_mapel +'">'+ value.mapel+'</option>');
                  });
              }
          });
      }else{
          $('select[name="id_mapel"]').empty();
      }
  });

</script>
