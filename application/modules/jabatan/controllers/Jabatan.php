<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jabatan extends MX_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('upload','session','form_validation'));
    $this->load->database();
    $this->load->model('M_jabatan');
    Modules::run('auth/cek_login');
  }
  function index()
  {
    $data['title'] = 'Jabatan';
    $data['jabatan'] = $this->M_jabatan->jabatan();
    $this->template->load('MasterLayout','r-jabatan',$data);
  }

  function create_jabatan($id_pegawai)
  {
    $data['title'] = 'Tambah Jabatan Pejabat';
    $data['detail'] = $this->M_jabatan->detail($id_pegawai);
    $data['kp'] = $this->db->query("SELECT * FROM tb_kp")->result();
    $this->template->load('MasterLayout','c-jabatan',$data);
  }

  function get_jabatan($id_kp)
  {
      $result = $this->db->where("id_kp",$id_kp)->get("tb_jabatan")->result();
      echo json_encode($result);
  }

  public function create_jabatan_proses()
  {
    $config['upload_path'] = './images/jabatan';
		$config['allowed_types'] = 'gif|jpg|png';
    $config['encrypt_name'] = TRUE;
    $config['overwrite'] = TRUE;
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
    $config['max_size'] = 1024*3;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('dok_jabatan'))
		{
			$dok_jabatan = "";
			$this->session->set_flashdata(
        "error",
        "<div class='alert alert-danger fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>error !</strong> Gagal Menambah Data!
        </div>"
      );
      redirect('jabatan');
		} else{
			$dok_jabatan = $this->upload->file_name;
      // Tambah Data Pangkat Pejabat pada tb_pegawai
      $data = array(
        'id_pegawai' => $this->input->post('id_pegawai'),
        'no_sk' => $this->input->post('no_sk'),
        'tgl_sk' => $this->input->post('tgl_sk'),
        'jbt_lama' => $this->input->post('jbt_lama'),
        'id_kp' => $this->input->post('id_kp'),
        'id_jabatan' => $this->input->post('id_jabatan'),
        'tmt_menjabat' => $this->input->post('tmt_menjabat'),
        'ket_menjabat' => $this->input->post('ket_menjabat'),
        'dok_jabatan' => $dok_jabatan,
      );

      // Update Data TMT Jabatan Pejabat pada tb_pegawai
      $id_pegawai = $this->input->post('id_pegawai');
      $tmt_jbt = $this->input->post('tmt_menjabat');
      $id_kp = $this->input->post('id_kp');
      $id_jabatan = $this->input->post('id_jabatan');

      $update_data = array(
        'id_pegawai'    => $id_pegawai,
        'tmt_jbt'       => $tmt_jbt,
        'id_kp'         => $id_kp,
        'id_jabatan'    => $id_jabatan
      );

      $where = array(
        'id_pegawai'    => $id_pegawai
      );

      $this->M_jabatan->create_jbt($data);
      $this->M_jabatan->update_tmt_jbt($where,$update_data,'tb_pegawai');
      $this->session->set_flashdata(
          "simpan",
          "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Menyimpan!
          </div>"
      );
    }
    redirect('jabatan');
  }
}
