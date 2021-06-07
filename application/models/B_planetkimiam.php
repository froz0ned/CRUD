<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class B_planetkimiam extends CI_Model {


    public function get_bahan($id){
        
        $jumlah = $this->input->post('jenis')*$this->input->post('stok');
        $total = $jumlah /1000;
        
        
        $this->db->set('jumlah','jumlah-'. $total, FALSE);
        $this->db->where('id', $id);
        $this->db->update('bahanbaku');

    }

    public function insertimport($data)
    {
        $this->db->insert_batch('b_planetkimia', $data);
        return $this->db->insert_id();
    }

   
}