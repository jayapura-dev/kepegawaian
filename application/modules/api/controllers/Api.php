<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller {
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_api');
    }

    function asnfungsional_get(){
        $fungsional = $this->M_api->get_asn_fungsional();
        $Countfungsional = count($fungsional);

        if ($Countfungsional != 0) {
            foreach($fungsional as $item){
                $post[] = array(
                    'id_pegawai'    => $item->id_pegawai,
                    'nama'          => $item->nama,
                    'tanggal_lahir' => $item->tgl_lahir,
                    'gender'        => $item->jekel
                );
            }

            $this->response([
                'status'    => REST_Controller::HTTP_OK,
                'messages'  => 'Data Ditemukan',
                'length'    => count($post),
                'result'    => $post
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status'    => REST_Controller::HTTP_NOT_IMPLEMENTED,
                'messages'  => 'Data Tidak ditemukan'
            ], HTTP_NOT_IMPLEMENTED);
        }
    }

    function addpegawai_post(){
        $nama = $this->post('nama');
        $status_pegawai = $this->post('status_pegawai');
        $nip = $this->post('nip');
        $id_penempatan = $this->post('id_penempatan');
        $tmp_lahir = $this->post('tmp_lahir');
        $tgl_lahir = $this->post('tgl_lahir');
        $jekel = $this->post('jekel');
        $etnis = $this->post('etnis');
        $agama = $this->post('agama');
        $pend_terahir = $this->post('pend_terahir');
        $kekhususan = $this->post('kekhususan');
        $id_pangkat = $this->post('id_pangkat');
        $id_jabatan = $this->post('id_jabatan');
        $id_sekolah = $this->post('id_sekolah');

        $data = array(
            'nama'      => $nama,
            'status_pegawai' => $status_pegawai,
            'nip'       => $nip,
            'id_penempatan' => $id_penempatan,
            'tgl_lahir' => $tgl_lahir,
            'tmp_lahir' => $tmp_lahir,
            'jekel'     => $jekel,
            'etnis'     => $etnis,
            'agama'     => $agama,
            'pend_terahir' => $pend_terahir,
            'kekhususan'=> $kekhususan,
            'id_pangkat'=> $id_pangkat,
            'id_jabatan'=> $id_jabatan,
            'id_sekolah'=> $id_sekolah
        );

        if ($data) {
            $create = $this->M_api->create_pegawai($data);
            $get_data = $this->M_api->get_callback_create($nama);

            $result = array(
                'id'    => $get_data['id_pegawai'],
                'nama'  => $get_data['nama']
            );

            $this->response([
                'status'   => REST_Controller::HTTP_OK,
                'message'  => 'Data Inserted!!',
                'data'   => $result
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status'   => false,
                'message'  => 'Not Inserted,chek valid input!',
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}