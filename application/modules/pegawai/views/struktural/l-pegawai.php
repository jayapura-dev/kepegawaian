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


<div class="project-details-area mg-b-40">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <?php echo $this->session->flashdata('update_foto');?>
        <div class="project-details-descri shadow-reset">
          <div class=" contact-img-v2">
            <img class="center" src="<?php echo base_url()?>images/foto_pegawai/gege.png" width="250px" alt="">
          </div>
          <br/>
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
                      <label>: <?php echo $detail['nama'] ?></label>
                    </div>
                  </div>
                </div>

                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Agama</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $detail['agama'] ?></label>
                    </div>
                  </div>
                </div>

                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> NIP</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $detail['nip'] ?></label>

                    </div>
                  </div>
                </div>

                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Tgl Lahir</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $detail['tmp_lahir'] ?>, <?php echo $detail['tgl_lahir'] ?></label>

                    </div>
                  </div>
                </div>

                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Jenis Kelamin</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $detail['jekel'] ?></label>

                    </div>
                  </div>
                </div>

                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Pendidikan Terahir</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $detail['pend_terahir'] ?></label>

                    </div>
                  </div>
                </div>


                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Jabatan</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $detail['jabatan'] ?> / TMT : </label>
                      <a href="#" target="_blank"><img src="<?php echo base_url()?>assets/img/logo/file.png" width="25px"></img></a>
                    </div>
                  </div>
                </div>

                <div class="project-details-mg">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <text> Pangkat/Gol</text>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <label>: <?php echo $detail['pangkat'] ?> / TMT :</label>
                    </div>
                  </div>
                </div>
                <hr/>


              </div>
              <br/>
              <a href="#" class="btn btn-primary"><i class="fa fa-trash"></i> Recyle</a>
              <a href="#" class="btn btn-danger"><i class="fa fa-remove"></i> Hapus</a>
              <!--<a href="#" class="btn btn-warning"><i class="fa fa-exchange"></i> Mutasi</a>!-->
            </div>
          </div>
        </div>
      </div>
    </br>
    </div>
  </div>
</div>

<script type="text/javascript">

</script>
