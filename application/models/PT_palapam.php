<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class PT_palapam extends CI_Model {


    public function get_bahan($id){
        
        $jumlah = $this->input->post('jenis')*$this->input->post('stok');
        $total = $jumlah /1000;
        
        
        $this->db->set('jumlah','jumlah-'. $total, FALSE);
        $this->db->where('id', $id);
        $this->db->update('bahanbaku');

    }

    public function insertimport($data)
    {
        $this->db->insert_batch('pt_palapa', $data);
        return $this->db->insert_id();
    }

   
}