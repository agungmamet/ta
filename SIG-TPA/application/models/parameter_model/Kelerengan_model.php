<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelerengan_model extends CI_Model {

    public function joinkelerengan()
    {
        $data=$this->db->query("SELECT id_kelerengan, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot, nama_admin from daerah_tpa, data_kelerengan, bobot_parameter, administrator where daerah_tpa.id_daerah=data_kelerengan.id_daerah and bobot_parameter.id_bobot=data_kelerengan.id_bobot and data_kelerengan.editby=administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM data_kelerengan");
        return $data->row(); 
    }

    public function tambah_kelerengan($data)
    {
        $this->db->insert('data_kelerengan',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot_parameter')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah_tpa')->result(); 
    }

    public function edit_kelerengan($id)
    {       
        $data = $this->db->query("SELECT id_kelerengan, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot from daerah_tpa, data_kelerengan, bobot_parameter where daerah_tpa.id_daerah=data_kelerengan.id_daerah and bobot_parameter.id_bobot=data_kelerengan.id_bobot and id_kelerengan=$id");
        return $data->result();
    }

    public function update_kelerengan($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_kelerengan($id)
    {
        $this->db->where('id_kelerengan',$id);
        $this->db->delete('data_kelerengan');
    }

}