<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Banjir_model extends CI_Model
{
	public function joinbanjir()
    {
        $data=$this->db->query("SELECT id_rawan_banjir, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot, nama_admin from daerah_tpa, data_rawan_banjir, bobot_parameter, administrator where daerah_tpa.id_daerah=data_rawan_banjir.id_daerah and bobot_parameter.id_bobot=data_rawan_banjir.id_bobot and data_rawan_banjir.editby=administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM data_rawan_banjir");
        return $data->row(); 
    }

    public function tambah_banjir($data)
    {
        $this->db->insert('data_rawan_banjir',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot_parameter')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah_tpa')->result(); 
    }

    public function edit_banjir($id)
    {       
        $data = $this->db->query("SELECT id_rawan_banjir, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot from daerah_tpa, data_rawan_banjir, bobot_parameter where daerah_tpa.id_daerah=data_rawan_banjir.id_daerah and bobot_parameter.id_bobot=data_rawan_banjir.id_bobot and id_rawan_banjir=$id");
        return $data->result();
    }

    public function update_banjir($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_banjir($id)
    {
        $this->db->where('id_rawan_banjir',$id);
        $this->db->delete('data_rawan_banjir');
    }
}