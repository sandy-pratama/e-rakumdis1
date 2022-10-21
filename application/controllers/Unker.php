<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unker extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("unker_model");
    }
    
    public function index()
    {
        $data['title']= 'Unit Kerja';
        $data['unker']= $this->unker_model->get_data('ref_unker')->result();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('unker',$data);
        $this->load->view('templates/footer');
    } 
    
} 

/* End of file Pengajuan.php */