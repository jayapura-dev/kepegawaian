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
                                <li><a href="#">Ijin Belajar</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pejabat</span>
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
                            <h1>Data<span class="table-project-n"></span> Ijin Belajar</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>ib/create_ijin" title="Tambah Ijin Belajar" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                      <th data-field="nosk">No SK</th>
                                      <th data-field="tgl">Tgl Awal/Akhir</th>
                                      <th data-field="file">File</th>
                                      <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($ijin as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama ?> <br/> <?php echo $item->nip ?></td>
                                    <td><?php echo $item->jenjang ?></td>
                                    <td><?php echo $item->no_sk ?></td>
                                    <td><?php echo $this->indo_tanggal->tgl_indo($item->tgl_awal) ?> s/d </br>  <?php echo $this->indo_tanggal->tgl_indo($item->tgl_akhir) ?>
                                    <td>
                                      
                                      <?php if($item->path_ijin != ''): ?>
                                        <a href="<?php echo base_url()?>images/ijin_belajar/<?php echo $item->path_ijin ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                                        <a class="btn btn-xs btn primary" href="#modalupdatefileijin" data-toggle="modal" onclick="update_file_ijin('<?php echo $item->id_pegawai ?>')" title="Edit File Ijin"><i class="fa fa-edit"></i></a>
                                      <?php else: ?>
                                        <a class="btn btn-xs btn primary" href="#modalupdatefileijin" data-toggle="modal" onclick="update_file_ijin('<?php echo $item->id_pegawai ?>')" title="Upload File Ijin"><i class="fa fa-upload"></i></a>
                                      <?php endif ?>
                                    </td>
                                    <td>
                                      <a href="#modalupdate" data-toggle="modal" type="button" class="btn btn-custon-three btn-primary btn-xs" onclick="update(
                                        '<?php echo $item->id_pegawai ?>',
                                        '<?php echo $item->nama ?>',
                                        '<?php echo $item->tgl_awal ?>',
                                        '<?php echo $item->tgl_akhir ?>',
                                        '<?php echo $item->id_jenjang ?>',
                                        '<?php echo $item->no_sk ?>'
                                      )"><i class="fa fa-edit"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Edit Data Ijin Belajar </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('u-pejabat-ijin'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalupdatefileijin" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Update File SK Ijin Belajar</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('ib/u-file-ijin'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update(id_pegawai,nama,tgl_awal,tgl_akhir,id_jenjang,no_sk){
    $('#id_pegawai').val(id_pegawai);
    $('#nama').val(nama);
    $('#tgl_awal').val(tgl_awal);
    $('#tgl_akhir').val(tgl_akhir);
    $('#id_jenjang').val(id_jenjang);
    $('#no_sk').val(no_sk);
  }
  function update_file_ijin(id_pegawai){
    $('#id_pegawai_ijin').val(id_pegawai);
  }
</script>
