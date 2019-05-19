<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Banjir extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parameter_model/Banjir_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Banjir_model->joinbanjir();
		$data['hitungdata']=$this->Banjir_model->hitungdata();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/banjir_view',$data);
		$this->load->view('Footer');
	}

	public function tambahbanjir()
	{
		$data['daerah']=$this->Banjir_model->tampilkecamatan();
		$data['idbobot']=$this->Banjir_model->idbobot();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_banjir_view',$data);
		$this->load->view('Footer');
	}

	public function simpanbanjir()
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
		$this->Banjir_model->tambah_banjir($data);
		redirect('parameter/Banjir/index');
	}

	public function editbanjir($id)
	{
		$data['edit']=$this->Banjir_model->edit_banjir($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_banjir_view',$data);
		$this->load->view('Footer');
	}

	public function updatebanjir()
	{
	 	$idrawanbanjir = $this->input->post('idrawanbanjir');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
	 	$keterangan = $this->input->post('keterangan');
		 
			$data = array(
				'nilai_klasifikasi' => $nilaiklasifikasi,
				'keterangan' => $keterangan,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_rawan_banjir' => $idrawanbanjir
			);
		 	// print_r($data);
			$this->Banjir_model->update_banjir($where,$data,'data_rawan_banjir');
			redirect('parameter/Banjir/index');
	}

	public function hapusbanjir($id)
	{
		$this->Banjir_model->hapus_banjir($id);
		redirect('parameter/Banjir/index');
	}
}