<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan_model extends CI_Model {

    public function joinlahan()
    {
        $data=$this->db->query("SELECT id_penggunaan_lahan, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot, nama_admin from daerah_tpa, data_penggunaan_lahan, bobot_parameter, administrator where daerah_tpa.id_daerah=data_penggunaan_lahan.id_daerah and bobot_parameter.id_bobot=data_penggunaan_lahan.id_bobot and data_penggunaan_lahan.editby=administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM data_penggunaan_lahan");
        return $data->row(); 
    }

    public function tambah_lahan($data)
    {
        $this->db->insert('data_penggunaan_lahan',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot_parameter')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah_tpa')->result(); 
    }

    public function edit_lahan($id)
    {       
        $data = $this->db->query("SELECT id_penggunaan_lahan, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot from daerah_tpa, data_penggunaan_lahan, bobot_parameter where daerah_tpa.id_daerah=data_penggunaan_lahan.id_daerah and bobot_parameter.id_bobot=data_penggunaan_lahan.id_bobot and id_penggunaan_lahan=$id");
        return $data->result();
    }

    public function update_lahan($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_lahan($id)
    {
        $this->db->where('id_penggunaan_lahan',$id);
        $this->db->delete('data_penggunaan_lahan');
    }

}