<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends Ci_Model {

   function getSiswa() {
     $data = $this->db->query('SELECT * FROM tb_user WHERE role_id = 2');
      return $data->result_array();
  }

  public function getSiswaById($id)
    {
        $this->db->from('tb_user');
        $this->db->where('id',$id);
        $query = $this->db->get();
  
        return $query->row();
    }

    public function addSiswa($data){
      $this->db->insert('tb_user',$data);
      return $this->db->insert_id();
    }

    public function update($data)
    {
      $where = array('id' => $this->input->post('id'));
      $this->db->update('tb_user', $data, $where);
      return $this->db->affected_rows();
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('tb_user');
    }
}