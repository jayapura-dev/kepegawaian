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
                                <li><a href="#">Jurnal</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>jurnal">Menu</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pendidik</span>
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
              <?php echo $this->session->flashdata('delete');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> Jurnal Pendidik</h1>

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
                                        <th data-field="Nama">Nama</th>
                                        <th data-field="Title">Title</th>
                                        <th data-field="Deskripsi">Deskripsi</th>
                                        <th data-field="Tanggal">Tanggal</th>
                                        <th data-field="Status">Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($pendidik as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item['nama'] ?></td>
                                    <td><?php echo $item['title'] ?></td>
                                    <td><?php echo $item['deskripsi'] ?></td>
                                    <td><?php echo $item['date'] ?></td>
                                    <td>
                                      <?php if($item['status'] == '1'){?>
                                        <label class="label label-success" title="Approve"><i class="fa fa-check"></i></label>
                                      <?php } else {?>
                                        <label class="label label-danger" title="Not Approve"><i class="fa fa-remove"></i></label>
                                      <?php } ?>
                                    </td>
                                    <td>
                                      <a href="#" type="button" title="Detail Pegawai" class="btn btn-custon-three btn-primary btn-xs"><i class="fa fa-user"></i></a>
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
