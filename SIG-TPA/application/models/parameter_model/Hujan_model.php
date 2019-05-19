<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hujan_model extends CI_Model {

    public function joinhujan()
    {
        $data=$this->db->query("SELECT id_curah_hujan, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot, nama_admin from daerah_tpa, data_curah_hujan, bobot_parameter, administrator where daerah_tpa.id_daerah=data_curah_hujan.id_daerah and bobot_parameter.id_bobot=data_curah_hujan.id_bobot and data_curah_hujan.editby=administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM data_curah_hujan");
        return $data->row(); 
    }

    public function tambah_hujan($data)
    {
        $this->db->insert('data_curah_hujan',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot_parameter')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah_tpa')->result(); 
    }

    public function edit_hujan($id)
    {       
        $data = $this->db->query("SELECT id_curah_hujan, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot from daerah_tpa, data_curah_hujan, bobot_parameter where daerah_tpa.id_daerah=data_curah_hujan.id_daerah and bobot_parameter.id_bobot=data_curah_hujan.id_bobot and id_curah_hujan=$id");
        return $data->result();
    }

    public function update_hujan($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_hujan($id)
    {
        $this->db->where('id_curah_hujan',$id);
        $this->db->delete('data_curah_hujan');
    }

}