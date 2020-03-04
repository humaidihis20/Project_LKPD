<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cekjawaban extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jawaban_usermodel');
	}

	public function index()
	{
		$this->Jawaban_usermodel->save();
		$this->session->set_userdata('selesai', true);
		$this->session->unset_userdata('waktu_start');
	}
}
