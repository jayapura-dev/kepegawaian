<?php if ($this->session->userdata('level')=='1') {?>
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li class="nav-item">
                                <a href="<?php echo base_url()?>home" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Data Master <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="<?php echo base_url()?>data_master/jabatan">Jabatan</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>data_master/pangkat">Pangkat</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>pegawai">Pegawai</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>pegawai/notifikasi">Pangkat Tentatif</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Pangkat <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo base_url()?>kpb/usulan_kp">Usulan KP</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>kpb">KP</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#others" href="#">Gaji Pokok <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="others" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo base_url()?>kgb/usulan_kgb">Usulan KGB</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>kgb">KGB</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Jabatan <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo base_url()?>jabatan">Jabatan</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Pensiun <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="Chartsmob" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo base_url()?>pensiun/usulan_pensiun">Usulan Pensiun</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>pensiun" class="dropdown-item">Data Pensiun</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Ijin Belajar <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo base_url()?>ib/usulan_pib">Usulan PIB</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>ib/ijin_belajar">Ijin Belajar</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>ib">PIB</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#formsmob" href="#">Tugas Belajar <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="formsmob" class="collapse dropdown-header-top">
                                    <li><a href="<?php echo base_url()?>tb/usulan_ptb">Usulan PTB</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>tb/tugas_belajar">Tugas Belajar</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>tb">PTB</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">Settings <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                    <li><a href="basic-form-element.html">Level</a>
                                    </li>
                                    <li><a href="<?php echo base_url()?>users" class="dropdown-item">Pengguna</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }

elseif ($this->session->userdata('level')=='2'){?>
  <div class="mobile-menu-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="mobile-menu">
                      <nav id="dropdown">
                          <ul class="mobile-menu-nav">
                              <li class="nav-item">
                                  <a href="<?php echo base_url()?>home" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
                              </li>
                              <li><a data-toggle="collapse" data-target="#Charts" href="#">Data Master <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul class="collapse dropdown-header-top">
                                      <li><a href="<?php echo base_url()?>data_master/jabatan">Jabatan</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>data_master/pangkat">Pangkat</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>pegawai">Pegawai</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#demo" href="#">Pangkat <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="demo" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo base_url()?>kpb/usulan_kp">Usulan KP</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>kpb">KP</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#others" href="#">Gaji Pokok <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="others" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo base_url()?>kgb/usulan_kgb">Usulan KGB</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>kgb">KGB</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Jabatan <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo base_url()?>jabatan">Jabatan</a>
                                      </li>

                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Pensiun <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="Chartsmob" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo base_url()?>pensiun/usulan_pensiun">Usulan Pensiun</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>pensiun" class="dropdown-item">Data Pensiun</a>
                                      </li>

                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Ijin Belajar <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="Tablesmob" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo base_url()?>ib/usulan_pib">Usulan PIB</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>ib/ijin_belajar">Ijin Belajar</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>ib">PIB</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#formsmob" href="#">Tugas Belajar <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="formsmob" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo base_url()?>tb/usulan_ptb">Usulan PTB</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>tb/tugas_belajar">Tugas Belajar</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>tb">PTB</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">Settings <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                      <li><a href="basic-form-element.html">Level</a>
                                      </li>
                                      <li><a href="<?php echo base_url()?>users" class="dropdown-item">Pengguna</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>

<?php } ?>
