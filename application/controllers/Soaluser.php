<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soaluser extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');

        if ($this->session->userdata('role_id') == null) {
            show_404();
        }
    }

    public function index()
    {
        $data['title'] = "LKPD | FKIP";
        $data['soal'] = $this->User_model->soal();
        $data['jawaban'] = $this->User_model->jawaban();
        $data['tampil'] = $this->User_model->tampilSoal();
        $data['name'] = $this->session->userdata('name');

        if($this->session->has_userdata('waktu_start') != null){
            $lewat = time() - (int)$this->session->userdata('waktu_start');
            }else{
                $this->session->set_userdata('waktu_start',time());
                $lewat = 0;
            }
            $data['lewat'] = $lewat;

        $this->load->view('templatesoal/header', $data); //untuk mengirim data
        $this->load->view('templatesoal/sidebar', $data); //untuk mengirim data
        $this->load->view('user/soal', $data); //untuk mengirim data
        $this->load->view('templatesoal/footer', $data);
    }
}
