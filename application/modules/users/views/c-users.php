<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
          <form action="<?php echo base_url()?>users/tambah_user_proses" method="post">
              <div class="form-group-inner">
               <div class="row">
                   <div class="col-lg-2">
                       <label class="login2 pull-right pull-right-pro">NIK</label>
                   </div>
                   <div class="col-lg-8">
                       <input name="nik" type="text" class="form-control" />
                   </div>
               </div>
              </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="login2 pull-right pull-right-pro">Nama</label>
                    </div>
                    <div class="col-lg-9">
                        <input name="nama" type="text" id="xnama" class="form-control" />
                    </div>
                  </div>
                </div>
              <div class="form-group-inner">
               <div class="row">
                   <div class="col-lg-2">
                       <label class="login2 pull-right pull-right-pro">Password</label>
                   </div>
                   <div class="col-lg-9">
                       <input name="sandi" type="text" class="form-control" />
                   </div>
               </div>
              </div>
              <div class="form-group-inner">
               <div class="row">
                   <div class="col-lg-2">
                       <label class="login2 pull-right pull-right-pro">Level</label>
                   </div>
                   <div class="col-lg-9">
                     <select name="level" class="form-control">
                       <option value="">-- Pilih --</option>
                          <?php
                          foreach($level as $p => $val)
                          {?>
                          <option value="<?php echo $val->id_level;?>"><?php echo $val->level; ?></option>
                          <?php
                          }?>
                     </select>
                   </div>
               </div>
             </div>
             <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-2">
                      <label class="login2 pull-right pull-right-pro">Status</label>
                  </div>
                  <div class="col-lg-2">
                      <input type="radio" value="aktif" name="status"> <i></i>aktif</label>
                  </div>
                  <div class="col-lg-2">
                      <input type="radio" value="block" name="status"> <i></i>block</label>
                  </div>
              </div>
            </div>
            <div class="form-group-inner">
             <div class="row">
                 <div class="col-lg-2">
                     <label class="login2 pull-right pull-right-pro">Email</label>
                 </div>
                 <div class="col-lg-9">
                     <input name="email" type="text" class="form-control" />
                 </div>
             </div>
           </div>
           <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2">
                    <label class="login2 pull-right pull-right-pro">Nama Lengkap</label>
                </div>
                <div class="col-lg-9">
                    <input name="nama_lengkap" type="text" class="form-control" />
                </div>
            </div>
           </div>
           <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2">
                    <label class="login2 pull-right pull-right-pro">Kontak</label>
                </div>
                <div class="col-lg-9">
                    <input name="kontak" type="text" class="form-control" />
                </div>
            </div>
           </div>
            <div class="form-group-inner">
             <div class="row">
               <div class="col-lg-2">
               </div>
               <div class="col-lg-2">
                 <input type="submit" class="btn btn-primary" value="Simpan">
               </div>
             </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
