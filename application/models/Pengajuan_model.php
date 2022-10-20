<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_model extends CI_Model {

    public function get_data($table)
    {
        return $this->db->get($table);
    }
}

/* End of file Pengajuan_model.php */