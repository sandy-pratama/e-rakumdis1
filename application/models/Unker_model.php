<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unker_model extends CI_Model {

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // public function update_data($data, $table)
    // {
    //     $this->db->where('no_tiket', $data['no_tiket']);
    //     $this->db->update($table, $data);
    // }
}

/* End of file Pengajuan_model.php */