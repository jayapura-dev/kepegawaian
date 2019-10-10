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
                                <li><span class="bread-blod">Pegawai</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('simpan');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset" onload="waktu()">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data<span class="table-project-n"></span> Master Pejabat</h1>
                            <div class="sparkline13-outline-icon">
                              <span><i class="fa fa-clock"></i><text id="jam"></text> : <text id="menit"></text> : <text id="detik"></text></span>
                              <span><a href="<?php echo base_url()?>pegawai/create_pegawai" title="Tambah Pegawai" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                          </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="nama">Nama Pejabat</th>
                                        <th data-field="jabatan">Jabatan</th>
                                        <th data-field="pangkat">Pangkat</th>
                                        <th data-field="kp">Jenis KP</th>
                                        <th data-field="uk">Unit Kerja</th>
                                        <!--<th data-field="MK">MK</th>!-->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($pegawai as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama ?> <br/> <?php echo $item->nip ?></td>
                                    <td><?php echo $item->jabatan ?> </br> <?php echo $item->tmt_jbt ?></td>
                                    <td><?php echo $item->pangkat ?> </br> <?php echo $item->tmt_pkt ?></td>
                                    <td><?php echo $item->jenis_kp ?></td>
                                    <td><?php echo $item->unit_kerja ?></td>
                                    <!--<td><?php echo $item->masa_kerja ?> Tahun </td>!-->
                                    <td>
                                      <a href="<?php echo base_url()?>pegawai/detail_pegawai/<?php echo $item->id_pegawai ?>" type="button" title="Detail Data Pegawai" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-user"></i></a>
                                      <a href="#modalupdate" data-toggle="modal" type="button" class="btn btn-custon-three btn-primary btn-xs" onclick="update(
                                        '<?php echo $item->id_pegawai ?>',
                                        '<?php echo $item->nama ?>',
                                        '<?php echo $item->nip ?>',
                                        '<?php echo $item->tgl_lahir ?>',
                                        '<?php echo $item->jekel ?>',
                                        '<?php echo $item->pend_terahir ?>',
                                        '<?php echo $item->bidang ?>',
                                        '<?php echo $item->id_pangkat ?>',
                                        '<?php echo $item->tmt_pkt ?>',
                                        '<?php echo $item->id_jabatan ?>',
                                        '<?php echo $item->tmt_jbt ?>',
                                        '<?php echo $item->gapok_pegawai ?>',
                                        '<?php echo $item->tmt_gapok ?>',
                                        '<?php echo $item->tmt_cpns ?>',
                                        '<?php echo $item->id_kp ?>',
                                        '<?php echo $item->id_unit ?>'
                                      )"><i class="fa fa-edit"></i></a>
                                      <a href="#" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                      <a href="<?php echo base_url()?>jabatan/create_jabatan/<?php echo $item->id_pegawai ?>" type="button" title="Tambah Jabatan Baru" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-cogs"></i></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalupdate" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Edit Data Pegawai </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pegawai/u-pegawai'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update(id_pegawai,nama,nip,tgl_lahir,jekel,pend_terahir,bidang,id_pangkat,tmt_pkt,id_jabatan,tmt_jbt,gapok,tmt_gapok,tmt_cpns,id_kp,id_unit)
  {
    $('#xid_pegawai').val(id_pegawai);
    $('#xnama').val(nama);
    $('#xnip').val(nip);
    $('#tgl_lahir').val(tgl_lahir);
    $('#xjekel').val(jekel);
    $('#xpend_terahir').val(pend_terahir);
    $('#xbidang').val(bidang);
    $('#xid_pangkat').val(id_pangkat);
    $('#xtmt_pkt').val(tmt_pkt);
    $('#xid_jabatan').val(id_jabatan);
    $('#xtmt_jbt').val(tmt_jbt);
    $('#xgapok').val(gapok);
    $('#xtmt_gapok').val(tmt_gapok);
    $('#xtmt_cpns').val(tmt_cpns);
    $('#xid_kp').val(id_kp);
    $('#xid_unit').val(id_unit);
  }
  function get_tgl_lahir()
  {
    var nip = $('#xnip').val();
    var tgl_lahir = nip.substr(0,8);
    var deteksi = nip.substr(14,1);
    var tmt_cp = nip.substr(8, 6);

    // Membuat Format date untuk tanggal lahir
    var tahun_lahir = tgl_lahir.substr(0,4);
    var bulan_lahir = tgl_lahir.substr(4,2);
    var hari_lahir = tgl_lahir.substr(6,2);
    var gabung = tahun_lahir + '-' + bulan_lahir + '-' + hari_lahir;
    $('#tgl_lahir').val(gabung);

    // Membuat Format Date untuk TMT CPNS
    var tahun_cpns = tmt_cp.substr(0, 4);
    var bulan_cpns = tmt_cp.substr(4,2);

    var gabung_tmt_cp = tahun_cpns + '-' + bulan_cpns + '-01';
    $('#xtmt_cpns').val(gabung_tmt_cp);

    // Membuat Validasi untuk Jenis Kelamin
    if(deteksi=='1'){
      $('#xjekel').val('LAKI-LAKI');
    }
    else if(deteksi=='2'){
      $('#xjekel').val('PEREMPUAN');
    }
    else{
      $('#xjekel').val('-');
    }

  }

  window.setTimeout("waktu()",1000);

  function waktu() {
      var tanggal = new Date();
      setTimeout("waktu()",1000);
      document.getElementById("jam").innerHTML = tanggal.getHours();
      document.getElementById("menit").innerHTML = tanggal.getMinutes();
      document.getElementById("detik").innerHTML = tanggal.getSeconds();
  }
</script>
