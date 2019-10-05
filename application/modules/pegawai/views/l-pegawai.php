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
                      <text> Jabatan</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $item->jabatan ?> / TMT : <?php echo $item->tmt_jbt ?></label>
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
                    </div>
                  </div>
                </div>
                <hr/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </br>
      <?php } ?>
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

<script type="text/javascript">
  function update_foto(id_pegawai,path_foto){
    $('#xxid_pegawai').val(id_pegawai);
    $('#xxpath_foto').val(path_foto);
  }
</script>
