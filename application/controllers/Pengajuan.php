<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengajuan_model");
    }
    
    
    public function index()
    {
        $data['title']= 'Pengajuan';
        $data['pengajuan']= $this->pengajuan_model->get_data('tb_surat')->result();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pengajuan',$data);
        $this->load->view('templates/footer');
    } 
} 

/* End of file Pengajuan.php */