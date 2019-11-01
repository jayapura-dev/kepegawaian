<div class="basic-login-form-ad">
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="all-form-element-inner">
            <form action="<?php echo base_url()?>pegawai/update_pegawai_proses" method="post">
              <div class="form-group-inner">
               <div class="row">
                   <div class="col-lg-2">
                       <label class="login2 pull-right pull-right-pro">Nama</label>
                   </div>
                   <div class="col-lg-9">
                       <input name="id_pegawai" type="hidden" id="xid_pegawai" class="form-control" />
                       <input name="nama" type="text" id="xnama" class="form-control" />
                   </div>
               </div>
             </div>
             <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-2">
                      <label class="login2 pull-right pull-right-pro">NIP</label>
                  </div>
                  <div class="col-lg-4">
                      <input name="nip" type="text" id="xnip" onchange="get_tgl_lahir()" class="form-control" />
                  </div>
                  <div class="col-lg-4">
                      <input name="tgl_lahir" type="text" id="xtgl_lahir" readonly="true" onchange="get_tgl_lahir()" class="form-control" />
                  </div>

              </div>
            </div>
            <div class="form-group-inner">
             <div class="row">
                 <div class="col-lg-2">
                     <label class="login2 pull-right pull-right-pro">TMT CPNS</label>
                 </div>
                 <div class="col-lg-4">
                     <input type="text" name="tmt_cpns" id="xtmt_cpns" onclick="get_tgl_lahir()" class="form-control">
                 </div>
                 <div class="col-lg-4">
                   <input name="jekel" type="text" id="xjekel" readonly="true" onchange="get_tgl_lahir()" class="form-control" />
                 </div>
             </div>
           </div>
           <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2">
                    <label class="login2 pull-right pull-right-pro">Pend.Terahir</label>
                </div>
                <div class="col-lg-4">
                  <select name="pend_terahir" class="form-control" id="xpend_terahir">
                      <option value="SMA">SMA</option>
                      <option value="D3">D3</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                  </select>
                </div>
                <div class="col-lg-1">
                    <label class="login2 pull-right pull-right-pro">Bidang</label>
                </div>
                <div class="col-lg-4">
                    <input name="bidang" type="text" class="form-control" placeholder="Bidang Kekhususan" />
                </div>
            </div>
          </div>

         <div class="form-group-inner">
          <div class="row">
              <div class="col-lg-2">
                  <label class="login2 pull-right pull-right-pro">Jenis KP</label>
              </div>
              <div class="col-lg-4">
                <select name="id_kp" class="form-control" id="id_kp">
                    <option value="">-- Pilih --</option>
                     <?php
                     foreach($kp as $j => $val)
                     {?>
                     <option value="<?php echo $val->id_kp;?>"><?php echo $val->jenis_kp; ?></option>
                     <?php
                     }?>
                </select>
              </div>
          </div>
        </div>
          <div class="form-group-inner">
           <div class="row">
               <div class="col-lg-2">
                   <label class="login2 pull-right pull-right-pro">Jabatan</label>
               </div>
               <div class="col-lg-3">
                 <select class="form-control" name="id_jabatan" id="xid_jabatan">

                 </select>
               </div>
               <div class="col-lg-2" id="sub_jabatan" hidden="true">
                   <select class="form-control" name="subjabatan">
                     <option value="-">--- Pilih ---</option>
                     <option value="Madya">Madya</option>
                     <option value="Muda">Muda</option>
                     <option value="Pertama">Pertama</option>
                     <option value="Penyelia">Penyelia</option>
                     <option value="Pelaksana Lanjutan">Pelaksana Lanjutan</option>
                     <option value="Pelaksana">Pelaksana</option>
                     <option value="Pelaksana Pemula">Pelaksana Pemula</option>
                   </select>
               </div>
               <div class="col-lg-1">
                   <label class="login2 pull-right pull-right-pro">TMT</label>
               </div>

               <div class="col-lg-3">
                   <input name="tmt_jbt" type="date" class="form-control" />
               </div>
           </div>
         </div>
         <div class="form-group-inner">
          <div class="row">
              <div class="col-lg-2">
                  <label class="login2 pull-right pull-right-pro">Pangkat/Gol</label>
              </div>
              <div class="col-lg-4">
                <select name="id_pangkat" class="chosen-select form-control" id="xid_pangkat">
                     <option value="">-- Pilih --</option>
                      <?php
                      foreach($pangkat as $p => $val)
                      {?>
                      <option value="<?php echo $val->id_pangkat;?>"><?php echo $val->pangkat; ?></option>
                      <?php
                      }?>
                 </select>
              </div>
              <div class="col-lg-1">
                  <label class="login2 pull-right pull-right-pro">TMT</label>
              </div>
              <div class="col-lg-3">
                  <input name="tmt_pkt" type="date" class="form-control" id="xtmt_pkt" />
              </div>
          </div>
        </div>
         <div class="form-group-inner">
          <div class="row">
              <div class="col-lg-2">
                  <label class="login2 pull-right pull-right-pro">Gaji Pokok</label>
              </div>
              <div class="col-lg-4">
                 <input name="gapok_pegawai" type="text" class="form-control" id="xgapok_pegawai" />
              </div>
              <div class="col-lg-1">
                  <label class="login2 pull-right pull-right-pro">TMT</label>
              </div>
              <div class="col-lg-3">
                  <input name="tmt_gapok" type="date" class="form-control" id="xtmt_gapok" />
              </div>
          </div>
        </div>
        <div class="form-group-inner">
         <div class="row">
             <div class="col-lg-2">
                 <label class="login2 pull-right pull-right-pro">Unit Kerja</label>
             </div>
             <div class="col-lg-4">
               <select name="id_unit" class="form-control" id="xid_unit">
                 <option value="">-- Pilih --</option>
                  <?php
                  foreach($unit as $j => $val)
                  {?>
                  <option value="<?php echo $val->id_unit;?>"><?php echo $val->unit_kerja; ?></option>
                  <?php
                  }?>

               </select>
             </div>
         </div>
       </div>
       <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-2">
                <label class="login2 pull-right pull-right-pro">Ijin Belajar</label>
            </div>
            <div class="col-lg-1">
              <input type="radio" value="ya" name="status_ijin_belajar" id="xstatus_ijin_belajar"> <i></i> Ya </label>
            </div>
            <div class="col-lg-1">
              <input type="radio" value="tidak" checked="" name="status_ijin_belajar" id="xstatus_ijin_belajar"> <i></i> Tidak </label>
            </div>
        </div>
      </div>
      <div class="form-group-inner">
       <div class="row">
           <div class="col-lg-2">
               <label class="login2 pull-right pull-right-pro">Tugas Belajar</label>
           </div>
           <div class="col-lg-1">
             <input type="radio" value="ya" name="status_tgs_belajar" id="xstatus_tgs_belajar"> <i></i> Ya </label>
           </div>
           <div class="col-lg-1">
             <input type="radio" value="tidak" checked="" name="status_tgs_belajar" id="xstatus_tgs_belajar"> <i></i> Tidak </label>
           </div>
       </div>
     </div>

        <!--<div class="form-group-inner">
         <div class="row">
             <div class="col-lg-2">
                 <label class="login2 pull-right pull-right-pro">Notif</label>
             </div>
             <div class="col-lg-1">
               <input type="radio" value="aktif" checked="" name="notifikasi"> <i></i> On </label>
             </div>
             <div class="col-lg-1">
               <input type="radio" value="nonaktif" name="notifikasi"> <i></i> Off </label>
             </div>
         </div>
       </div>
       <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-2">
                <label class="login2 pull-right pull-right-pro">Keterangan</label>
            </div>
            <div class="col-lg-9">
                <input name="ket" type="text" class="form-control" />
            </div>
        </div>
      </div>!-->
      <div class="form-group-inner">
       <div class="row">
         <div class="col-lg-2">
         </div>
         <div class="col-lg-2">
           <input type="submit" class="btn btn-primary" value="Simpan">
           <a class="btn btn-danger" href="<?php echo base_url()?>pegawai">Batal</a>
         </div>
       </div>
     </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</div>
