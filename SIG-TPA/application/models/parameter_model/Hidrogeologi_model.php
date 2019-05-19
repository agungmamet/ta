<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hidrogeologi_model extends CI_Model {

    public function joinhidro()
    {
        $data=$this->db->query("SELECT id_hidrogeologi,nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot, nama_admin from daerah_tpa, data_hidrogeologi, bobot_parameter, administrator where daerah_tpa.id_daerah=data_hidrogeologi.id_daerah and bobot_parameter.id_bobot=data_hidrogeologi.id_bobot and data_hidrogeologi.editby=administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM data_hidrogeologi");
        return $data->row(); 
    }

    public function tambah_hidro($data)
    {
        $this->db->insert('data_hidrogeologi',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot_parameter')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah_tpa')->result(); 
    }

    public function edit_hidro($id)
    {       
        $data = $this->db->query("SELECT id_hidrogeologi,nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot from daerah_tpa, data_hidrogeologi, bobot_parameter where daerah_tpa.id_daerah=data_hidrogeologi.id_daerah and bobot_parameter.id_bobot=data_hidrogeologi.id_bobot and id_hidrogeologi=$id");
        return $data->result();
    }

    public function update_hidro($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_hidro($id)
    {
        $this->db->where('id_hidrogeologi',$id);
        $this->db->delete('data_hidrogeologi');
    }

}