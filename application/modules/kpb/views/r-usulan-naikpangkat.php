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
                                <li><a href="#">Pangkat</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Usulan KP</span>
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
              <?php echo $this->session->flashdata('update_notif');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h5>Daftar<span class="table-project-n"></span> Pejabat yang akan naik pangkat Kurang dari 100 Hari</h5>
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
                                        <th data-field="nip">NIP</th>
                                        <th data-field="tglkp">Tanggal KP</th>
                                        <th data-field="seleisih">Selisih Hari</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($naik as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><a href="<?php echo base_url()?>pegawai/detail_pegawai/<?php echo $item->id_pegawai ?>"><?php echo $item->nama ?></a></td>
                                    <td><?php echo $item->nip ?></td>
                                    <td><?php echo $this->indo_tanggal->tgl_indo($item->tgl_kp) ?>
                                    <td><?php echo $item->selisih ?></td>
                                    <td>
                                      <a href="<?php echo base_url()?>kpb/create_kpb/<?php echo $item->id_pegawai ?>" title="Tambah Data KP" type="button" class="btn btn-primary btn-xs"><i class="fa fa-plus-circle"></i></a>
                                      <a href="#modalupdate" data-toggle="modal" type="button" title="Matikan Notifikasi Untuk Pegawai ini" class="btn btn-danger btn-xs" onclick="update(
                                        '<?php echo $item->id_pegawai ?>',
                                        '<?php echo $item->notifikasi ?>',
                                        '<?php echo $item->ket ?>'
                                      )"><i class="fa fa-bell"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Update Notif Pejabat</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('kpb/u-notif-pangkat'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update(id_pegawai,notifikasi,ket){
    $('#idpegawai').val(id_pegawai);
    $('#notifikasi').val(notifikasi);
    $('#ket').val(ket);
  }
</script>
