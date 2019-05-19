<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Daerah_model extends CI_Model
{
	public function daerah()
    {
        $data=$this->db->query("SELECT id_daerah, nama_daerah, nama_admin from daerah_tpa, administrator where daerah_tpa.editby = administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM daerah_tpa");
        return $data->row(); 
    }

    public function tambah_daerah($data)
    {
        $this->db->insert('daerah_tpa',$data);
    }

    public function edit_daerah($id)
    {       
        $data = $this->db->query("SELECT * FROM daerah_tpa where id_daerah = $id");
        return $data->result();
    }
    public function update_daerah($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

        public function hapus_daerah($id)
    {
        $this->db->where('id_daerah',$id);
        $this->db->delete('daerah_tpa');
    }
}