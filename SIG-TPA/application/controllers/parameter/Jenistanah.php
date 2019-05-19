<?php
defined('BASEPATH') or exit('no direct access script allowed');

class Jenistanah extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parameter_model/Jenistanah_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Jenistanah_model->jointanah();
		$data['hitungdata']=$this->Jenistanah_model->hitungdata();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/jenistanah_view',$data);
		$this->load->view('Footer');
	}

	public function tambahjenistanah()
	{
		$data['daerah']=$this->Jenistanah_model->tampilkecamatan();
		$data['idbobot']=$this->Jenistanah_model->idbobot();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_jenistanah_view',$data);
		$this->load->view('Footer');
	}

	public function simpanjenistanah()
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
		$this->Jenistanah_model->tambah_jenistanah($data);
			// $this->db->insert('pegawai',$data);
		redirect('parameter/Jenistanah/index');
	}

	public function editjenistanah($id)
	{
		$data['edit']=$this->Jenistanah_model->edit_jenistanah($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_jenistanah_view',$data);
		$this->load->view('Footer');
	}

	public function updatejenistanah()
	{
	 	$idtanah = $this->input->post('idtanah');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
	 	$keterangan = $this->input->post('keterangan');
		 
			$data = array(
				'nilai_klasifikasi' => $nilaiklasifikasi,
				'keterangan' => $keterangan,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_jenis_tanah' => $idtanah
			);
		 	// print_r($data);
			$this->Jenistanah_model->update_jenistanah($where,$data,'data_jenis_tanah');
			redirect('parameter/Jenistanah/index');
	}

	public function hapusjenistanah($id)
	{
		$this->Jenistanah_model->hapus_jenistanah($id);
		redirect('parameter/Jenistanah/index');
	}
}