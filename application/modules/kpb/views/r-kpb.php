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
                                <li><a href="#">Data</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Kenaikan Pangkat</span>
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
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data<span class="table-project-n"></span> Kenaikan Pangkat Pejabat</h1>

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
                                        <th data-field="pl">Pangkat Lama</th>
                                        <th data-field="skkp">No SK</th>
                                        <th data-field="pangkat">Pangkat Baru</th>
                                        <th data-field="file">File</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($kpb as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama ?> <br/> <?php echo $item->nip ?></td>
                                    <td><?php echo $item->pkt_lama ?></td>
                                    <td><?php echo $item->no_sk ?> <br/> <?php echo $item->tgl_sk ?></td>
                                    <td><?php echo $item->pangkat ?> </br> <?php echo $item->tmt_kpb ?></td>
                                    <td>
                                      <a href="<?php echo base_url()?>images/kpb/<?php echo $item->dok_kpb ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="30px"></img></a>
                                      <a href="#modalupdatefile" data-toggle="modal" class="fa fa-edit" onclick="update_file(
                                        '<?php echo $item->id_kpb ?>',
                                        '<?php echo $item->nama ?>',
                                        '<?php echo $item->dok_kpb ?>'
                                      )"></a>
                                    </td>
                                    <td>
                                      <a href="#modalupdate" data-toggle="modal" type="button" class="btn btn-custon-three btn-primary btn-xs" onclick="update(
                                        '<?php echo $item->id_kpb ?>',
                                        '<?php echo $item->id_pegawai ?>',
                                        '<?php echo $item->nama ?>',
                                        '<?php echo $item->no_sk ?>',
                                        '<?php echo $item->tgl_sk ?>',
                                        '<?php echo $item->pkt_lama ?>',
                                        '<?php echo $item->id_pangkat ?>',
                                        '<?php echo $item->tmt_kpb ?>',
                                        '<?php echo $item->ket_kpb ?>'
                                      )"><i class="fa fa-edit"></i></a>
                                      <a href="<?php echo base_url()?>kpb/delete_kpb/<?php echo $item->id_kpb ?>" type="button" title="Hapus" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Edit Data Pangkat Pejabat </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('kpb/u-kpb'); ?>
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
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Edit Data Pangkat Pejabat </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('kpb/u-file-kpb'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update(id_kpb,id_pegawai,nama,no_sk,tgl_sk,pkt_lama,id_pangkat,tmt_kpb,ket_kpb){
    $('#xid_kpb').val(id_kpb);
    $('#xid_pegawai').val(id_pegawai);
    $('#xnama').val(nama);
    $('#xno_sk').val(no_sk);
    $('#xtgl_sk').val(tgl_sk);
    $('#xpkt_lama').val(pkt_lama);
    $('#xid_pangkat').val(id_pangkat);
    $('#xtmt_kpb').val(tmt_kpb);
    $('#xket_kpb').val(ket_kpb);
  }
  function update_file(id_kpb,nama,dok_kpb){
    $('#xxid_kpb').val(id_kpb);
    $('#xxnama').val(nama);
    $('#xxdok_kpb').val(dok_kpb);
  }
</script>
