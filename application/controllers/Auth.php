<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $this->form_validation->set_rules('nis', 'nis', 'trim|numeric');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->session->userdata('role_id') == 1){
            redirect('admin');
        }

        if ($this->session->userdata('role_id') == 2) {
            redirect('user');
        }

        if($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } elseif($this->input->post('admin') == 'admin'){
            // validation success
            $this->_loginadmin();
        } else{
            $this->_login();
        }
    }

    public function admin()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->session->userdata('role_id') == 1){
            redirect('admin');
        }

        if ($this->session->userdata('role_id') == 2) {
            redirect('user');
        }

        if($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validation success
            $this->_loginadmin();
        }
    }

    private function _login() 
    {
        $nis = $this->input->post('nis');
        $password = $this->input->post('password');

        $tb_user = $this->db->get_where('tb_user', ['nis' => $nis])->row_array();
    
       
        if($tb_user) {
                if(password_verify($password, $tb_user['password'])) {
                    $data = [
                        'nis' => $tb_user['nis'],
                        'role_id' => $tb_user['role_id'],
                        'name' => $tb_user['name'], //set session nama
                    ];
                    $this->session->set_userdata($data);
                    if($tb_user['role_id'] == 1) {
                        redirect('admin');
                    } else{
                        redirect('user');
                    }

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Sandi Salah!</div>');
                    redirect('auth');
                }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIS belum terdaftar!</div>');
            redirect('auth');
            
        }
    }

    private function _loginadmin() 
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $tb_user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
    
       
        if($tb_user) {
                if(password_verify($password, $tb_user['password'])) {
                    $data = [
                        'email' => $tb_user['email'],
                        'nis' => $tb_user['nis'],
                        'role_id' => $tb_user['role_id'],
                        'name' => $tb_user['name'], //set session nama
                    ];
                    $this->session->set_userdata($data);
                    if($tb_user['role_id'] == 1) {
                        redirect('admin');
                    } else{
                        redirect('user');
                    }

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
            redirect('auth');
            
        }
    }
    
    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim',[
            'required' => 'Harap isikan nama anda!',
            'trim' => 'Harap isikan nama anda!'
        ]);
        $this->form_validation->set_rules('nis', 'Nis', 'required|trim|numeric|is_unique[tb_user.nis]',[
            'required' => 'Harap isikan NIS anda!',
            'trim' => 'Harap isikan NIS anda!',
            'numeric' => 'Harap diisi hanya dengan angka',
            'is_unique' => 'NIS sudah terdaftar',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[tb_user.email]', [
            'is_unique' => 'Email sudah diregistrasi',
            'valid_email' => 'Email tidak valid'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Kata sandi salah!',
            'min_length' => 'Kata sandi tidak aman'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password1]');

        if ($this->form_validation->run() == false) {
        $data['title'] = 'Registration Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/registration');
        $this->load->view('templates/auth_footer');

    } else {
        $data = [
            
            'name' => htmlspecialchars($this->input->post('name')),
            'nis' => htmlspecialchars($this->input->post('nis')),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'date_created' => time(),
            'image' => 'default.jpg',
        ];

        $this->db->insert('tb_user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
        redirect('auth');
    }
}
    public function logout() 
    {
        $this->session->unset_userdata('nis');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('waktu_start');
        $this->session->unset_userdata('selesai');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
  
}