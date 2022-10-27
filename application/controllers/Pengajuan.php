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
    
    

    public function data_bkd()
    {
        $data['title']= 'Bkd';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('bkd');
        $this->load->view('templates/footer');
        
    } 

    public function tambah()
    {
        $data['title']= 'Buat Pengajuan';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_pengajuan');
        $this->load->view('templates/footer');
        
    } 

    public function tambah_aksi()
    {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'skpd' => $this->input->post('skpd'),
            );

            $this->pengajuan_model->insert_data($data, 'tb_surat');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hore!</strong> Pengajuan Kamu Sudah Terkirim.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('dashboard');
        }
    }

    public function edit($no_tiket)
    {
        $this->_rules();

        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'no_tiket' => $no_tiket,
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'pangkat' => $this->input->post('pangkat'),
                'jabatan' => $this->input->post('jabatan'),
                'satker' => $this->input->post('satker'),
                'skpd' => $this->input->post('skpd'),
                'status' => $this->input->post('status'),
                'dokumen' => $_FILES['dokumen'],
                
                if ('dokumen'=''){}else{
                    $config['upload_path']      = './assets/dokumen',
                    $config['allowed_types']    = 'jpg|png|pdf',

                    $this->load->library('upload',$config),
                    if(!$this->upload->do_upload('dokumen')){
                        echo "UPLOAD GAGAL"; die();
                    }else{
                        'dokumen'->this->upload->data('file_name');
                    }
                }
            );

            $this->pengajuan_model->update_data($data, 'tb_surat' );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hore!</strong> Pengajuan Kamu Sudah Di Ubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('dashboard');
        }
        
    }

    public function _rules()
    {
        
        $this->form_validation->set_rules('nip', 'NIP', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('nama', 'Nama', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('skpd', 'SKPD', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        
    }
} 

/* End of file Pengajuan.php */