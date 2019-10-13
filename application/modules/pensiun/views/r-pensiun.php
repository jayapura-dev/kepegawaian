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
                                <li><a href="#">Pensiun</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="#">Data Pensiun Pejabat</a> <span class="bread-slash">/</span>
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
              <?php echo $this->session->flashdata('update_file');?>
              <?php echo $this->session->flashdata('error');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data<span class="table-project-n"></span> Pensiun Pejabat</h1>

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
                                        <th data-field="nama">Nama Pegawai</th>
                                        <th data-field="sk">No / Tgl SK</th>
                                        <th data-field="keterangan">Keterangan</th>
                                        <th data-field="file">File</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($pensiun as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama ?> <br/> <?php echo $item->nip ?></td>
                                    <td><?php echo $item->no_sk ?> <br/> <?php echo $item->tgl_sk ?></td>
                                    <td><?php echo $item->ket_pensiun ?> </td>
                                    <td>
                                      <a href="<?php echo base_url()?>images/pensiun/<?php echo $item->dok_pensiun ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                                      <a href="#modalupdatefile" data-toggle="modal" class="fa fa-edit" onclick="update_file(
                                        '<?php echo $item->id_pegawai ?>',
                                        '<?php echo $item->nama ?>',
                                        '<?php echo $item->dok_pensiun ?>'
                                      )"></a>
                                    </td>
                                    <td>
                                      <a href="#modalupdate" data-toggle="modal" type="button" class="btn btn-custon-three btn-primary btn-xs" onclick="update(
                                      '<?php echo $item->id_pegawai ?>',
                                      '<?php echo $item->nama ?>',
                                      '<?php echo $item->nip ?>',
                                      '<?php echo $item->tgl_lahir ?>',
                                      '<?php echo $item->jekel ?>',
                                      '<?php echo $item->pend_terahir ?>',
                                      '<?php echo $item->bidang ?>',
                                      '<?php echo $item->id_pangkat ?>',
                                      '<?php echo $item->pangkat ?>',
                                      '<?php echo $item->tmt_pkt ?>',
                                      '<?php echo $item->id_jabatan ?>',
                                      '<?php echo $item->jabatan ?>',
                                      '<?php echo $item->tmt_jbt ?>',
                                      '<?php echo $item->gapok_pegawai ?>',
                                      '<?php echo $item->tmt_gapok ?>',
                                      '<?php echo $item->tmt_cpns ?>',
                                      '<?php echo $item->id_kp ?>',
                                      '<?php echo $item->jenis_kp ?>',
                                      '<?php echo $item->id_unit ?>',
                                      '<?php echo $item->unit_kerja ?>',
                                      '<?php echo $item->path_foto ?>',
                                      '<?php echo $item->no_sk ?>',
                                      '<?php echo $item->tgl_sk ?>',
                                      '<?php echo $item->ket_pensiun ?>',
                                      )"><i class="fa fa-edit"></i></a>
                                      <a href="#" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Edit Data Pensiun Pejabat </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pensiun/u-pensiun'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalupdatefile" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Edit File Pensiun </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pensiun/u-file-pensiun'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function update
    (
      id_pegawai,
      nama,
      nip,
      tgl_lahir,
      jekel,
      pend_terahir,
      bidang,
      id_pangkat,
      pangkat,
      tmt_pkt,
      id_jbt,
      jabatan,
      tmt_jbt,
      gapok_pegawai,
      tmt_gapok,
      tmt_cpns,
      id_kp,
      jenis_kp,
      id_unit,
      unit_kerja,
      path_foto,
      no_sk,
      tgl_sk,
      ket_pensiun
    ){
      $('#xid_pegawai').val(id_pegawai);
      $('#xnama').val(nama);
      $('#xnip').val(nip);
      $('#xtgl_lahir').val(tgl_lahir);
      $('#xjekel').val(jekel);
      $('#xpend_terahir').val(pend_terahir);
      $('#xbidang').val(bidang);
      $('#xid_pangkat').val(id_pangkat);
      $('#pangkat').val(pangkat);
      $('#tmt_pkt').val(tmt_pkt);
      $('#id_jabatan').val(id_jabatan);
      $('#jabatan').val(jabatan);
      $('#tmt_jbt').val(tmt_jbt);
      $('#gapok_pegawai').val(gapok_pegawai);
      $('#tmt_gapok').val(tmt_gapok);
      $('#tmt_cpns').val(tmt_cpns);
      $('#id_kp').val(id_kp);
      $('#jenis_kp').val(jenis_kp);
      $('#id_unit').val(id_unit);
      $('#unit_kerja').val(unit_kerja);
      $('#xpath_foto').val(path_foto);
      $('#no_sk').val(no_sk);
      $('#tgl_sk').val(tgl_sk);
      $('#ket_pensiun').val(ket_pensiun);
    }
    function update_file(id_pegawai,nama,dok_pensiun){
      $('#xxid_pegawai').val(id_pegawai);
      $('#xxnama').val(nama);
      $('#xxdok_pensiun').val(dok_pensiun);
    }
</script>
