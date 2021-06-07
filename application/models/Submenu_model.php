<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu_model extends CI_Model
{
	public function delete($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan','Dihapus');
            redirect('menu/submenu','refresh');
	}
}

	


}