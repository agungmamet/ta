<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hujan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('parameter_model/Hujan_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Hujan_model->joinhujan();
		$data['hitungdata']=$this->Hujan_model->hitungdata();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/hujan_view',$data);
		$this->load->view('Footer');
	}

	public function tambahhujan()
	{
		$data['daerah']=$this->Hujan_model->tampilkecamatan();
		$data['idbobot']=$this->Hujan_model->idbobot();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_hujan_view',$data);
		$this->load->view('Footer');
	}

	public function simpanhujan()
	{
		$iddaerah = $this->input->post('iddaerah');
		$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
		$keterangan = $this->input->post('keterangan');
		$idbobot = $this->input->post('idbobot');

			$data = array(
				'id_daerah' => $iddaerah,
				'nilai_klasifikasi' => $nilaiklasifikasi,
				'keterangan' => $keterangan,
				'id_bobot' => $idbobot,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Hujan_model->tambah_hujan($data);
			// $this->db->insert('pegawai',$data);
		redirect('parameter/Hujan/index');
	}

	public function edithujan($id)
	{
		$data['edit']=$this->Hujan_model->edit_hujan($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_hujan_view',$data);
		$this->load->view('Footer');
	}

	public function updatehujan()
	{
	 	$idhujan = $this->input->post('idhujan');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
	 	$keterangan = $this->input->post('keterangan');
		 
			$data = array(
				'nilai_klasifikasi' => $nilaiklasifikasi,
				'keterangan' => $keterangan,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_curah_hujan' => $idhujan
			);
		 	// print_r($data);
			$this->Hujan_model->update_hujan($where,$data,'data_curah_hujan');
			redirect('parameter/Hujan/index');
	}

	public function hapushujan($id)
	{
		$this->Hujan_model->hapus_hujan($id);
		redirect('parameter/Hujan/index');
	}
}
