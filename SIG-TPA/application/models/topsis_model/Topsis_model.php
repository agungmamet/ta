<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topsis_model extends CI_Model {

    public function pembagi()
    {
        $data=$this->db->query("SELECT * from pembagi");
        return $data->result();
    }

    public function ternormalisasi()
    {
        $data=$this->db->query("SELECT * from normalisasi");
        return $data->result();
    }

    public function terbobot()
    {
        $data=$this->db->query("SELECT * from terbobot");
        return $data->result();
	}
	
	public function amax()
    {
        $data=$this->db->query("SELECT * from max_a");
        return $data->result();
	}

	public function amin()
    {
        $data=$this->db->query("SELECT * from min_a");
        return $data->result();
	}

	public function dmax()
    {
        $data=$this->db->query("SELECT nama_daerah, dmax from nilai_d");
        return $data->result();
	}

	public function dmin()
    {
        $data=$this->db->query("SELECT nama_daerah, dmin from nilai_d");
        return $data->result();
	}

	public function v()
    {
        $data=$this->db->query("SELECT * from nilai_v order by v desc");
        return $data->result();
	}

	public function maksimal()
    {
        $data=$this->db->query("SELECT max(v) as max from nilai_v");
        return $data->row();
	}
}
