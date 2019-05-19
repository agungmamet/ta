<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('parameter_model/Lahan_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Lahan_model->joinlahan();
		$data['hitungdata']=$this->Lahan_model->hitungdata();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/lahan_view',$data);
		$this->load->view('Footer');
	}

	public function tambahlahan()
	{
		$data['daerah']=$this->Lahan_model->tampilkecamatan();
		$data['idbobot']=$this->Lahan_model->idbobot();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_lahan_view',$data);
		$this->load->view('Footer');
	}

	public function simpanlahan()
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
		$this->Lahan_model->tambah_lahan($data);
			// $this->db->insert('pegawai',$data);
		redirect('parameter/Lahan/index');
	}

	public function editlahan($id)
	{
		$data['edit']=$this->Lahan_model->edit_lahan($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_lahan_view',$data);
		$this->load->view('Footer');
	}

	public function updatelahan()
	{
	 	$idlahan = $this->input->post('idlahan');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
	 	$keterangan = $this->input->post('keterangan');
		 
			$data = array(
				'nilai_klasifikasi' => $nilaiklasifikasi,
				'keterangan' => $keterangan,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_penggunaan_lahan' => $idlahan
			);
		 	// print_r($data);
			$this->Lahan_model->update_lahan($where,$data,'data_penggunaan_lahan');
			redirect('parameter/Lahan/index');
	}

	public function hapuslahan($id)
	{
		$this->Lahan_model->hapus_lahan($id);
		redirect('parameter/Lahan/index');
	}
}
