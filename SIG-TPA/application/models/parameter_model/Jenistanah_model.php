<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenistanah_model extends CI_Model {

    public function jointanah()
    {
        $data=$this->db->query("SELECT id_jenis_tanah, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot, nama_admin from daerah_tpa, data_jenis_tanah, bobot_parameter, administrator where daerah_tpa.id_daerah=data_jenis_tanah.id_daerah and bobot_parameter.id_bobot=data_jenis_tanah.id_bobot and data_jenis_tanah.editby=administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM data_jenis_tanah");
        return $data->row(); 
    }

    public function tambah_jenistanah($data)
    {
        $this->db->insert('data_jenis_tanah',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot_parameter')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah_tpa')->result(); 
    }

    public function edit_jenistanah($id)
    {       
        $data = $this->db->query("SELECT id_jenis_tanah, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot from daerah_tpa, data_jenis_tanah, bobot_parameter where daerah_tpa.id_daerah=data_jenis_tanah.id_daerah and bobot_parameter.id_bobot=data_jenis_tanah.id_bobot and id_jenis_tanah=$id");
        return $data->result();
    }

    public function update_jenistanah($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_jenistanah($id)
    {
        $this->db->where('id_jenis_tanah',$id);
        $this->db->delete('data_jenis_tanah');
    }
}