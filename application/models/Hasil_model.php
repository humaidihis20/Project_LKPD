<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_model extends Ci_Model {

  public function Ambil() {
     $data = $this->db->query('SELECT * FROM tb_hasil');
      return $data->result_array();
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Edit($id)
  {
    $data = $this->db->query("SELECT * FROM tb_hasil WHERE id = $id");
    return $data->result_array();

  }

  // public function Detail($id)
  // {
  //   $data = $this->db->get_where('tb_hasil', array('nama', 'nilai' => $id))->row();
	// 	return $data;

  // }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function AmbilJawaban($kode = 0) {
    $data = $this->db->query("select * from soal where id = '$kode'")->result_array();
    return $data[0]['kunci'];
  }

}