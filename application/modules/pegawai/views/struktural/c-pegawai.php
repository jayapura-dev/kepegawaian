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
                                <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>pegawai">Pegawai</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>pegawai/asn_struktural">ASN Struktural</a> <span class="bread-slash">/</span>
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
                      <h1><i class="fa fa-plus"></i> Tambah ASN Struktural</h1>
                  </div>
              </div>
              <div class="sparkline12-graph">
                  <div class="basic-login-form-ad">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="all-form-element-inner">
                                  <form action="<?php echo base_url()?>pegawai/create_asn_struktural_post" method="post">
                                      <div class="form-group-inner">
                                         <div class="row">
                                             <div class="col-lg-2">
                                                 <label class="login2 pull-right pull-right-pro">Nama</label>
                                             </div>
                                             <div class="col-lg-9">
                                                 <input name="nama" type="text" class="form-control" />
                                             </div>
                                         </div>
                                      </div>
                                     <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">NIP</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <input name="nip" type="text" id="nip" onchange="get_tgl_lahir()" class="form-control" />
                                            </div>
                                            <div class="col-lg-4">
                                                <input name="tgl_lahir" type="text" id="tgl_lahir" readonly="true" onchange="get_tgl_lahir()" class="form-control" />
                                            </div>
                                        </div>
                                     </div>
                                     <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label class="login2 pull-right pull-right-pro">JEKEL</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <input name="jekel" type="text" id="jekel" readonly="true" onchange="get_tgl_lahir()" class="form-control" />
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
                                      <div class="form-group-inner">
                                           <div class="row">
                                               <div class="col-lg-2">
                                                   <label class="login2 pull-right pull-right-pro">Pangkat</label>
                                               </div>
                                               <div class="col-lg-4">
                                                 <select name="id_pangkat" class="chosen-select form-control">
                                                      <option value="">-- Pilih --</option>
                                                       <?php
                                                       foreach($pangkat as $p => $val)
                                                       {?>
                                                       <option value="<?php echo $val->id_pangkat;?>"><?php echo $val->pangkat; ?></option>
                                                       <?php
                                                       }?>
                                                  </select>
                                               </div>
                                               <div class="col-lg-1">
                                                   <label class="login2 pull-right pull-right-pro">TMT</label>
                                               </div>
                                               <div class="col-lg-4">
                                                    <input name="tmt_pkt" type="date" class="form-control" />
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <label class="login2 pull-right pull-right-pro">Jabatan</label>
                                                </div>
                                                <div class="col-lg-4">
                                                  <input name="id_penempatan" type="hidden" value="1" class="form-control" />
                                                  <select name="id_pangkat" class="chosen-select form-control">
                                                       <option value="">-- Pilih --</option>
                                                        <?php
                                                        foreach($jabatan as $p => $val)
                                                        {?>
                                                        <option value="<?php echo $val->id_jabatan;?>"><?php echo $val->jabatan; ?></option>
                                                        <?php
                                                        }?>
                                                   </select>
                                                </div>
                                                <div class="col-lg-1">
                                                    <label class="login2 pull-right pull-right-pro">TMT</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input name="tmt_jbt" type="date" class="form-control" />
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

<script type="text/javascript">

  $('#id_kp').change(function() {
    var id_kp = $(this).val();
    $('#sub_jabatan').prop('hidden', id_kp != 3);
  })

  function get_tgl_lahir()
  {
    var nip = $('#nip').val();
    var tgl_lahir = nip.substr(0,8);
    var deteksi = nip.substr(14,1);
    var tmt_cp = nip.substr(8, 6);

    // Membuat Format date untuk tanggal lahir
    var tahun_lahir = tgl_lahir.substr(0,4);
    var bulan_lahir = tgl_lahir.substr(4,2);
    var hari_lahir = tgl_lahir.substr(6,2);
    var gabung = tahun_lahir + '-' + bulan_lahir + '-' + hari_lahir;
    $('#tgl_lahir').val(gabung);

    var tahun_cpns = tmt_cp.substr(0, 4);
    var bulan_cpns = tmt_cp.substr(4,2);

    var gabung_tmt_cp = tahun_cpns + '-' + bulan_cpns + '-01';
    $('#tmt_cpns').val(gabung_tmt_cp);

    // Membuat Validasi untuk Jenis Kelamin
    if(deteksi=='1'){
      $('#jekel').val('LAKI-LAKI');
    }
    else if(deteksi=='2'){
      $('#jekel').val('PEREMPUAN');
    }
    else{
      $('#jekel').val('-');
    }
  }
</script>
