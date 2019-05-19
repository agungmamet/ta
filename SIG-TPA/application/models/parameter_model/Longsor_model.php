<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Longsor_model extends CI_Model {

    public function joinlongsor()
    {
        $data=$this->db->query("SELECT id_rawan_longsor, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot, nama_admin from daerah_tpa, data_rawan_longsor, bobot_parameter, administrator where daerah_tpa.id_daerah=data_rawan_longsor.id_daerah and bobot_parameter.id_bobot=data_rawan_longsor.id_bobot and data_rawan_longsor.editby=administrator.id_admin");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM data_rawan_longsor");
        return $data->row(); 
    }

    public function tambah_longsor($data)
    {
        $this->db->insert('data_rawan_longsor',$data);
    }

    public function idbobot()
    {
        return $this->db->get('bobot_parameter')->result();
    }

    public function tampilkecamatan()
    {
        return $this->db->get('daerah_tpa')->result(); 
    }

    public function edit_longsor($id)
    {       
        $data = $this->db->query("SELECT id_rawan_longsor, nama_daerah, nilai_klasifikasi, keterangan, nilai_bobot from daerah_tpa, data_rawan_longsor, bobot_parameter where daerah_tpa.id_daerah=data_rawan_longsor.id_daerah and bobot_parameter.id_bobot=data_rawan_longsor.id_bobot and id_rawan_longsor=$id");
        return $data->result();
    }

    public function update_longsor($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_longsor($id)
    {
        $this->db->where('id_rawan_longsor',$id);
        $this->db->delete('data_rawan_longsor');
    }

}