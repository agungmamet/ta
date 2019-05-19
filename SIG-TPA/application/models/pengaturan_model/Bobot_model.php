<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Bobot_model extends CI_Model
{
	public function bobot()
    {
        $data=$this->db->query("SELECT id_bobot, nama_parameter, nilai_bobot, nama_admin from bobot_parameter, administrator where bobot_parameter.editby = administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM bobot_parameter");
        return $data->row(); 
    }

     public function tambah_bobot($data)
    {
        $this->db->insert('bobot_parameter',$data);
    }

    public function edit_bobot($id)
    {       
        $data = $this->db->query("SELECT * FROM bobot_parameter where id_bobot = $id");
        return $data->result();
    }
    
    public function update_bobot($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

        public function hapus_bobot($id)
    {
        $this->db->where('id_bobot',$id);
        $this->db->delete('bobot_parameter');
    }
}