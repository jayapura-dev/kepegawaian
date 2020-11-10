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
                                <li><span class="bread-blod">ASN Struktural</span>
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
              <?php echo $this->session->flashdata('create_success');?>
              <?php echo $this->session->flashdata('create_fail');?>
              <?php echo $this->session->flashdata('update_success');?>
              <?php echo $this->session->flashdata('update_fail');?>
              <?php echo $this->session->flashdata('delete');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> ASN Struktural</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>pegawai/create_asn_struktural" title="Tambah Pegawai" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                        <th data-field="Nomor">No</th>
                                        <th data-field="Nama">Nama Pegawai</th>
                                        <th data-field="Pangkat">Pangkat</th>
                                        <th data-field="Jabatan">Jabatan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($struk as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama ?></td>
                                    <td><?php echo $item->pangkat ?></td>
                                    <td><?php echo $item->jabatan ?></td>
                                    <td>
                                      <a href="<?php echo base_url()?>pegawai/edit_struktural/<?php echo $item->id_pegawai ?>" type="button" class="btn btn-custon-three btn-primary btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="<?php echo base_url()?>pegawai/delete_struktural/<?php echo $item->id_pegawai ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                      <a href="<?php echo base_url()?>pegawai/detail_struktural/<?php echo $item->id_pegawai ?>" type="button" title="Detail Pegawai" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-user"></i></a>
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
