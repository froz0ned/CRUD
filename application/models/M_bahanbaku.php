<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_bahanbaku extends CI_Model {
    function __construct(){
      parent::__construct();
      $this->load->database();
    }
 
    public function get_current_page($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('tanggal', 'Asc');
        $query = $this->db->get('bahanbaku');

        $rows = $query->result();
 
        if ($query->num_rows() > 0) {
            foreach ($rows as $row) {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }

    function get_bahanbaku()
    {
        
        $query = $this->db->get('bahanbaku');
        return $query->row();
    }

     
    public function get_total() {

        return $this->db->count_all('bahanbaku');
    }

    public function get_product_pksearch($keyword){
		$this->db->select('*');
		$this->db->from('bahanbaku');
		$this->db->like('nama',$keyword);
		$this->db->or_like('tanggal',$keyword);
		return $this->db->get()->result();
	}
}