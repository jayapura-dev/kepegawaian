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
                                <li><a href="#">Tugas Belajar</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Data</span>
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
                            <h1>Data<span class="table-project-n"></span> Tugas Belajar</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>tb/create_tb" title="Tambah Ijin Belajar" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                      <th data-field="nama">Nama Pegawai</th>
                                      <th data-field="jenjang">Jenjang</th>
                                      <th data-field="lembaga">Lembaga / Lokasi</th>
                                      <th data-field="nosk">No / Tgl SK</th>
                                      <th data-field="waktu">Waktu </th>
                                      <th data-field="file">File</th>
                                      <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($tb as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama ?> <br/> <?php echo $item->nip ?></td>
                                    <td><?php echo $item->jenjang ?></td>
                                    <td><?php echo $item->lembaga ?> <br/> <?php echo $item->lokasi_pdk ?></td>
                                    <td><?php echo $item->no_sk ?> <br/> <?php echo $item->tgl_sk ?></td>
                                    <td><?php echo $item->tmt_awal ?> s/d </br>  <?php echo $item->tmt_akhir ?></td>
                                    <td>
                                      <a href="<?php echo base_url()?>images/tugas_belajar/<?php echo $item->dok_tgs ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                                      <a href="#modalupdatefile" data-toggle="modal" class="fa fa-edit" onclick="update_file(
                                        '<?php echo $item->id_tgs ?>',
                                        '<?php echo $item->nama ?>',
                                        '<?php echo $item->dok_tgs ?>'
                                      )"></a>
                                    </td>
                                    <td>
                                      <a href="#modalupdate" data-toggle="modal" type="button" class="btn btn-custon-three btn-primary btn-xs" onclick="update_tgs(
                                        '<?php echo $item->id_tgs ?>',
                                        '<?php echo $item->id_pegawai ?>',
                                        '<?php echo $item->nama ?>',
                                        '<?php echo $item->id_jenjang ?>',
                                        '<?php echo $item->tmt_awal ?>',
                                        '<?php echo $item->tmt_akhir ?>',
                                        '<?php echo $item->lokasi_pdk ?>',
                                        '<?php echo $item->lembaga ?>',
                                        '<?php echo $item->no_sk ?>',
                                        '<?php echo $item->tgl_sk ?>'
                                      )"><i class="fa fa-edit"></i></a>
                                      <a href="<?php echo base_url()?>tb/delete_tgs/<?php echo $item->id_tgs ?>" type="button" title="Hapus" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Edit Data Tugas Belajar </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('u-tb'); ?>
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
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Edit file Tugas Belajar </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('u-file-tb'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update_tgs(id_tgs,id_pegawai,nama,id_jenjang,tmt_awal,tmt_akhir,lokasi_pdk,lembaga,no_sk,tgl_sk){
    $('#id_tgs').val(id_tgs);
    $('#id_pegawai').val(id_pegawai);
    $('#nama').val(nama);
    $('#id_jenjang').val(id_jenjang);
    $('#tmt_awal').val(tmt_awal);
    $('#tmt_akhir').val(tmt_akhir);
    $('#lokasi_pdk').val(lokasi_pdk);
    $('#lembaga').val(lembaga);
    $('#no_sk').val(no_sk);
    $('#tgl_sk').val(tgl_sk);
  }
  function update_file(id_tgs,nama,dok_ijin){
    $('#xid_tgs').val(id_tgs);
    $('#xnama').val(nama);
    $('#xdok_tgs').val(dok_tgs);
  }
</script>