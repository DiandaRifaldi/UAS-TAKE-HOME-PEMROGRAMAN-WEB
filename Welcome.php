<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('v_upload');
	}

	public function prosesupload(){
			$config['upload_path'] = './produk/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '10000';
			$config['max_width'] = '5000';
			$config['max_height'] = '5000';

			$this->load->library('upload', $config);

		if( ! $this->upload->do_upload())
		{
				echo 'gagal upload';
		}
		else
		{
				$img = $this->upload->data();
				$gambar = $img['file_name'];
				$nama = $this->input->post('nama',true);
				$harga = $this->input->post('harga',true);
				$deskripsi = $this->input->post('deskripsi',true);
				$data = array(
				'nama_produk' => $nama ,
				'harga' => $harga ,
				'gambar' => $gambar ,
				'deskripsi' => $deskripsi ,
				);

		$this->db->insert('tb_produk', $data);
		echo 'Berhasil upload';
		}
	}

	public function beranda(){
		$this ->data['produk'] = $this->db->get('tb_produk')->result_array();
		$this->load->view('v_beranda',$this->data);
	}
}