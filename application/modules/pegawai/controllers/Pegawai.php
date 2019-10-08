<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('upload','session','form_validation'));
    $this->load->database();
    $this->load->model('M_pegawai');
    Modules::run('auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Data Pegawai';
    $data['pegawai'] = $this->M_pegawai->pegawai();
    $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat")->result();
    $data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan")->result();
    $data['kp'] = $this->db->query("SELECT * FROM tb_kp")->result();
    $data['unit'] = $this->db->query("SELECT * FROM tb_unit")->result();
    $this->template->load('MasterLayout','r-pegawai',$data);
  }
  public function create_pegawai()
  {
    $data['title'] = 'Tambah Pegawai';
    $data['pangkat'] = $this->db->query("SELECT * FROM tb_pangkat ORDER BY id_pangkat DESC")->result();
    $data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan")->result();
    $data['kp'] = $this->db->query("SELECT * FROM tb_kp")->result();
    $data['unit'] = $this->db->query("SELECT * FROM tb_unit")->result();
    $this->template->load('MasterLayout','c-pegawai',$data);
  }
  function get_jabatan($id_kp)
  {
      $result = $this->db->where("id_kp",$id_kp)->get("tb_jabatan")->result();
      echo json_encode($result);
  }
  public function create_pegawai_proses()
  {
    $nama = $this->input->post('nama');
    $nip = $this->input->post('nip');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $jekel = $this->input->post('jekel');
    $pend_terahir = $this->input->post('pend_terahir');
    $bidang = $this->input->post('bidang');
    $id_pangkat = $this->input->post('id_pangkat');
    $tmt_pkt = $this->input->post('tmt_pkt');
    $id_jabatan = $this->input->post('id_jabatan');
    $tmt_jbt = $this->input->post('tmt_jbt');
    $gapok_pegawai = $this->input->post('gapok_pegawai');
    $tmt_gapok = $this->input->post('tmt_gapok');
    $tmt_cpns = $this->input->post('tmt_cpns');
    $id_kp = $this->input->post('id_kp');
    $id_unit = $this->input->post('id_unit');

    $data = array(
      'nama'          => $nama,
      'nip'           => $nip,
      'tgl_lahir'     => $tgl_lahir,
      'jekel'         => $jekel,
      'pend_terahir'  => $pend_terahir,
      'bidang'        => $bidang,
      'id_pangkat'    => $id_pangkat,
      'tmt_pkt'       => $tmt_pkt,
      'id_jabatan'    => $id_jabatan,
      'tmt_jbt'       => $tmt_jbt,
      'gapok_pegawai' => $gapok_pegawai,
      'tmt_gapok'     => $tmt_gapok,
      'tmt_cpns'      => $tmt_cpns,
      'id_kp'         => $id_kp,
      'id_unit'       => $id_unit
    );

    $this->M_pegawai->create_pegawai($data);
    $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menyimpan Data!
        </div>"
    );
    redirect('pegawai');
  }
  function update_pegawai_proses()
  {
    $id_pegawai = $this->input->post('id_pegawai');
    $nama = $this->input->post('nama');
    $nip = $this->input->post('nip');
    $tgl_lahir = date($this->input->post('tgl_lahir'));
    $jekel = $this->input->post('jekel');
    $pend_terahir = $this->input->post('pend_terahir');
    $id_pangkat = $this->input->post('id_pangkat');
    $tmt_pkt = $this->input->post('tmt_pkt');
    $id_jabatan = $this->input->post('id_jabatan');
    $tmt_jbt = $this->input->post('tmt_jbt');
    $gapok_pegawai = $this->input->post('gapok_pegawai');
    $tmt_gapok = $this->input->post('tmt_gapok');
    $tmt_cpns = $this->input->post('tmt_cpns');
    $id_kp = $this->input->post('id_kp');
    $id_unit = $this->input->post('id_unit');

    $data = array(
      'id_pegawai'    => $id_pegawai,
      'nama'          => $nama,
      'nip'           => $nip,
      'tgl_lahir'     => $tgl_lahir,
      'jekel'         => $jekel,
      'pend_terahir'  => $pend_terahir,
      'id_pangkat'    => $id_pangkat,
      'tmt_pkt'       => $tmt_pkt,
      'id_jabatan'    => $id_jabatan,
      'tmt_jbt'       => $tmt_jbt,
      'gapok_pegawai' => $gapok_pegawai,
      'tmt_gapok'     => $tmt_gapok,
      'tmt_cpns'      => $tmt_cpns,
      'id_kp'         => $id_kp,
      'id_unit'       => $id_unit
    );

    $where = array(
      'id_pegawai'    => $id_pegawai
    );

    $this->M_pegawai->update_pegawai($where,$data,'tb_pegawai');
    $this->session->set_flashdata(
        "update",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Mengupdate Data!
        </div>"
    );
    redirect('pegawai');
  }
  public function detail_pegawai($id_pegawai)
  {
    $data['title'] = 'Detail Pegawai';
    $data['detail'] = $this->M_pegawai->detail_pegawai($this->uri->segment(3));

    $this->template->load('MasterLayout','l-pegawai',$data);
  }
  public function update_foto_proses()
  {
    $config['upload_path'] = './images/foto_pegawai';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('path_foto'))
		{
			$path_foto = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('pegawai');
		} else{
      $path_foto = $this->upload->file_name;

      $id_pegawai = $this->input->post('id_pegawai');

      $data = array(
        'id_pegawai' => $id_pegawai,
        'path_foto' => $path_foto
      );

      $where = array(
        'id_pegawai' => $id_pegawai
      );

      $this->M_pegawai->update_foto($where, $data,'tb_pegawai');
      $this->session->set_flashdata("update_foto","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Anda Telah Mengganti Foto Profil Pegawai!
                </div>");
      redirect('pegawai/detail_pegawai/'.$id_pegawai.'');
    }
  }
}
