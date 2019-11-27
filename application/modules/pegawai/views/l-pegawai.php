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
                                <li><a href="<?php echo base_url()?>pegawai">Pejabat</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Detail</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php foreach($detail as $item){?>
<div class="project-details-area mg-b-40">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <?php echo $this->session->flashdata('update_foto');?>
        <div class="project-details-descri shadow-reset">
          <div class=" contact-img-v2">
            <?php if($item->path_foto != ''){ ?>
            <img class="center" src="<?php echo base_url()?>images/foto_pegawai/<?php echo $item->path_foto ?>" width="190px" height="120" alt="">
          <?php } else{?>
            <img class="center" src="<?php echo base_url()?>images/profil/guest.png" width="190px" alt="">
          <?php } ?>
          </div>
          <br/>
          <div class="contact-client-img contact-img-v2">
            <a href="#updatefoto" data-toggle="modal" class="btn btn-default btn-xs" onclick="update_foto('<?php echo $item->id_pegawai ?>','<?php echo $item->path_foto ?>')"><i class="fa fa-edit"></i> Edit Foto</a>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <?php echo $this->session->flashdata('update_file_cpns');?>
        <div class="project-details-wrap shadow-reset">
          <div class="container-fluid">
            <div class="row">

              <div class="sparkline12-hd">
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> NAMA</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->nama ?></label>
                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Agama</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->agama ?></label>
                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> NIP</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->nip ?></label>

                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Tgl Lahir</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->tgl_lahir ?></label>

                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Jenis Kelamin</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->jekel ?></label>

                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Pendidikan Terahir</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->pend_terahir ?></label>

                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> TMT CPNS</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->tmt_cpns ?></label>
                      <?php if($item->path_cpns != ''): ?>
                        <a href="<?php echo base_url()?>images/cpns/<?php echo $item->path_cpns ?>" target="_blank" title="File SK"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                        <a class="btn btn-xs btn primary" href="#modalupdatecpns" data-toggle="modal" onclick="update_file('<?php echo $item->id_pegawai ?>')"><i class="fa fa-edit"></i> Edit File</a>
                      <?php else: ?>
                        <a class="btn btn-xs btn primary" href="#modalupdatecpns" data-toggle="modal" onclick="update_file('<?php echo $item->id_pegawai ?>')"><i class="fa fa-upload"></i> Upload SK CPNS</a>
                      <?php endif ?>
                    </div>
                  </div>
                </div>

                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Jabatan</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->jabatan ?> / TMT : <?php echo $item->tmt_jbt ?></label>
                      <?php if($item->path_jbt != ''): ?>
                        <a href="<?php echo base_url()?>images/jabatan/<?php echo $item->path_jbt ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                        <a class="btn btn-xs btn primary" href="#modalupdatejabatan" data-toggle="modal" onclick="update_file_jbt('<?php echo $item->id_pegawai ?>')"><i class="fa fa-edit"></i> Edit File</a>
                      <?php else: ?>
                        <a class="btn btn-xs btn primary" href="#modalupdatejabatan" data-toggle="modal" onclick="update_file_jbt('<?php echo $item->id_pegawai ?>')"><i class="fa fa-upload"></i> Upload SK Jabatan</a>
                      <?php endif ?>
                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Pangkat/Gol</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->pangkat ?>/<?php echo $item->golongan ?> / TMT : <?php echo $item->tmt_pkt ?></label>
                      <?php if($item->path_pangkat != ''): ?>
                        <a href="<?php echo base_url()?>images/kpb/<?php echo $item->path_pangkat ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                        <a class="btn btn-xs btn primary" href="#modalupdatepangkat" data-toggle="modal" onclick="update_file_pangkat('<?php echo $item->id_pegawai ?>')"><i class="fa fa-edit"></i> Edit File</a>
                      <?php else: ?>
                        <a class="btn btn-xs btn primary" href="#modalupdatepangkat" data-toggle="modal" onclick="update_file_pangkat('<?php echo $item->id_pegawai ?>')"><i class="fa fa-upload"></i> Upload SK Pangkat</a>
                      <?php endif ?>
                    </div>
                  </div>
                </div>
                <hr/>
                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Gaji Pokok</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: Rp <?php echo number_format($item->gapok_pegawai) ?> / TMT : <?php echo $item->tmt_gapok ?></label>
                      <?php if($item->path_gaji != ''): ?>
                        <a href="<?php echo base_url()?>images/kgb/<?php echo $item->path_gaji ?>" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                        <a class="btn btn-xs btn primary" href="#modalupdategaji" data-toggle="modal" onclick="update_file_gaji('<?php echo $item->id_pegawai ?>')"><i class="fa fa-edit"></i> Edit File</a>
                      <?php else: ?>
                        <a class="btn btn-xs btn primary" href="#modalupdategaji" data-toggle="modal" onclick="update_file_gaji('<?php echo $item->id_pegawai ?>')"><i class="fa fa-upload"></i> Upload SK KGB</a>
                      <?php endif ?>
                    </div>
                  </div>
                </div>
                <hr/>

              </div>
              <br/>
              <a href="#" class="btn btn-primary"><i class="fa fa-trash"></i> Recyle</a>
              <a href="<?php echo base_url()?>pegawai/delete_pegawai/<?php echo $item->id_pegawai ?>" class="btn btn-danger"><i class="fa fa-remove"></i> Hapus</a>
              <!--<a href="#" class="btn btn-warning"><i class="fa fa-exchange"></i> Mutasi</a>!-->
            </div>
          </div>
        </div>
      </div>
    </br>
      <?php } ?>
    </div>
  </div>
</div>

<div class="feed-mesage-project-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="sparkline8-list shadow-reset mg-tb-30">
          <div class="sparkline8-hd">
            <div class="main-sparkline8-hd">
              <h1><i class="fa fa-clock-o"></i> Histori KP</h1>
              <div class="sparkline8-outline-icon">
                  <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                  <span><i class="fa fa-wrench"></i></span>
                  <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
              </div>
            </div>
          </div>
          <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
            <?php
            $no = 1;
            foreach($kpb as $k){?>
            <div class="comment-phara">
              <div class="comment-adminpr">
                  <a class="dashtwo-messsage-title" href="#"><?php echo $no++ ?> . <?php echo $k->pangkat ?></a>
                  <p class="comment-content">Naik Pangkat Dari <strong><?php echo $k->pkt_lama ?></strong> ke  <strong><?php echo $k->pangkat ?></strong></p>
              </div>
              <div class="admin-comment-month">
                  <p class="comment-clock"><i class="fa fa-calendar"></i> TMT : <?php echo $k->tmt_pkt ?> <a href="<?php echo base_url()?>images/kpb/<?php echo $k->dok_kpb ?>" target="_blank" title="File SK"> <img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a> </p>
                  <p class="comment-clock">
                    <!--<a class="btn btn-xs btn-default" href="#" title="Edit"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-xs btn-primary" href="#" title="Hapus"><i class="fa fa-trash"></i></a>!-->
                  </p>

              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
      <!--  End Histori Kenaikan Pangkat Berkala  !-->
      <!--  Start Histori Kenaikan Gaji Berkala  !-->
      <div class="col-lg-4">
        <div class="sparkline8-list shadow-reset mg-tb-30">
          <div class="sparkline8-hd">
            <div class="main-sparkline8-hd">
              <h1><i class="fa fa-clock-o"></i> Histori KGB</h1>
              <div class="sparkline8-outline-icon">
                  <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                  <span><i class="fa fa-wrench"></i></span>
                  <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
              </div>
            </div>
          </div>
          <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
            <?php
            $no = 1;
            foreach($kgb as $g){?>
            <div class="comment-phara">
              <div class="comment-adminpr">
                  <a class="dashtwo-messsage-title" href="#"><?php echo $no++ ?> . <?php echo number_format($g->gapok_baru) ?></a>
                  <p class="comment-content">Naik Gaji Dari Jumlah Gaji Pokok <strong><?php echo number_format($g->gapok_lama) ?></strong> ke  <strong><?php echo number_format($g->gapok_baru) ?></strong></p>
              </div>
              <div class="admin-comment-month">
                  <p class="comment-clock"><i class="fa fa-calendar"></i> TMT : <?php echo $g->tmt_kgb ?> <a href="<?php echo base_url()?>images/kgb/<?php echo $g->dok_kgb ?>" target="_blank" title="File SK"> <img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a> </p>
                  <p class="comment-clock">
                    <!--<a class="btn btn-xs btn-default" href="#" title="Edit"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-xs btn-primary" href="#" title="Hapus"><i class="fa fa-trash"></i></a>!-->
                  </p>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
      <!--  End Histori Kenaikan Gaji Berkala  !-->
      <!--  Start Histori Jabatan  !-->
      <div class="col-lg-4">
        <div class="sparkline8-list shadow-reset mg-tb-30">
          <div class="sparkline8-hd">
            <div class="main-sparkline8-hd">
              <h1><i class="fa fa-clock-o"></i> Histori Jabatan</h1>
              <div class="sparkline8-outline-icon">
                  <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                  <span><i class="fa fa-wrench"></i></span>
                  <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
              </div>
            </div>
          </div>
          <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
            <?php
            $no = 1;
            foreach($jabatan as $j){?>
            <div class="comment-phara">
              <div class="comment-adminpr">
                  <a class="dashtwo-messsage-title" href="#"><?php echo $no++ ?> . <?php echo $j->jabatan ?></a>
                  <p class="comment-content">Berganti Jabatan Dari <strong><?php echo $j->jbt_lama ?></strong> ke  <strong><?php echo $j->jabatan ?></strong></p>
              </div>
              <div class="admin-comment-month">
                  <p class="comment-clock"><i class="fa fa-calendar"></i> TMT : <?php echo $j->tmt_menjabat ?> <a href="<?php echo base_url()?>images/jabatan/<?php echo $j->dok_jabatan ?>" target="_blank" title="File SK"> <img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a> </p>
                  <p class="comment-clock">
                    <!--<a class="btn btn-xs btn-default" href="#" title="Edit"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-xs btn-primary" href="#" title="Hapus"><i class="fa fa-trash"></i></a>!-->
                  </p>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="updatefoto" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Update Foto</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pegawai/u-foto'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalupdatecpns" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Update File SK CPNS</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pegawai/u-file-cpns'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalupdatejabatan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Update File SK Jabatan</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pegawai/u-file-jabatan'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalupdatepangkat" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Update File SK Pangkat</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pegawai/u-file-pangkat'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalupdategaji" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Update File SK Gaji</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('pegawai/u-file-gaji'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update_foto(id_pegawai,path_foto){
    $('#xxid_pegawai').val(id_pegawai);
    $('#xxpath_foto').val(path_foto);
  }
  function update_file(id_pegawai){
    $('#idpegawai').val(id_pegawai);
  }
  function update_file_jbt(id_pegawai){
    $('#zidpegawai').val(id_pegawai);
  }
  function update_file_pangkat(id_pegawai){
    $('#pidpegawai').val(id_pegawai);
  }
  function update_file_gaji(id_pegawai){
    $('#gidpegawai').val(id_pegawai);
  }
</script>
