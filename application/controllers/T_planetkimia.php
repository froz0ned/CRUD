<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class T_planetkimia extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('T_planetkimiam');
		$this->load->library('excel');
		
	}

	public function index(){
		$data['title'] = 'Planet Kimia Tokped';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['bahan'] = $this->db->get('bahanbaku')->result_array();
		
		$query = $this->db->get('t_planetkimia');
		$data['results'] = $query->result();
		 
		 //end pagination
		
		$this->form_validation->set_rules('kd_brg','Kd_brg','required');
		$this->form_validation->set_rules('nama_brg','Nama_brg','required');
		$this->form_validation->set_rules('modal','Modal','required');
		$this->form_validation->set_rules('jual','Jual','required');
		$this->form_validation->set_rules('stok','Stok','required');
		
		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('tokped/tplanetkimia', $data);
		$this->load->view('templates/footer');
		} else {
			$data = [
				'kd_brg' => $this->input->post('kd_brg'),
				'nama_brg' => $this->input->post('nama_brg'),
				'jenis' => $this->input->post('jenis'),
				'modal' => $this->input->post('modal'),
				'jual' => $this->input->post('jual'),
				'stok' => $this->input->post('stok'),
				'tanggal' => time(),
				'bahan_id' => $this->input->post('bahan_id')
			];
			$this->T_planetkimiam->get_bahan($this->input->post('bahan_id'));
			$this->db->insert('t_planetkimia',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Tambah Barang Berhasil
			</div>');
			redirect('t_planetkimia');
		}

	}

	public function tpk_delete($id){
		$data['title'] = 'Planet Kimia Tokped';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('t_planetkimia', ['id' => $id])->row_array();

		$this->form_validation->set_rules('pass','Stok','required');

		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('tokped/tpkdelete', $data);
		$this->load->view('templates/footer');
		} else {
			if ($this->input->post('pass') == "luxmanabadi"){
			$this->db->where('id', $id);
	        $this->db->delete('t_planetkimia');
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Barang Berhasil Dihapus
			</div>');
            redirect('t_planetkimia','refresh');
			} 
		
			else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Password salah
			</div>');
				redirect('t_planetkimia');
			} 
		
		}
	}


	public function tpk_pass($id){
		$data['title'] = 'Planet Kimia Tokped';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('t_planetkimia', ['id' => $id])->row_array();

		$this->form_validation->set_rules('pass','Stok','required');

		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('tokped/tpkpass', $data);
		$this->load->view('templates/footer');
		} else {
			if ($this->input->post('pass') == "luxmanabadi"){
			$this->tpk_edit($id);
			} 
		
			else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Password salah
			</div>');
				redirect('t_planetkimia');
			} 
		
		}
	}

	public function tpk_edit($id){
		$data['title'] = 'Planet Kimia Tokped';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('t_planetkimia', ['id' => $id])->row_array();
	    $this->form_validation->set_rules('kd_brg','Kd_brg','required');
		$this->form_validation->set_rules('nama_brg','Nama_brg','required');
		$this->form_validation->set_rules('modal','Modal','required');
		$this->form_validation->set_rules('jual','Jual','required');
		$this->form_validation->set_rules('stok','Stok','required');
		
		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('tokped/tpkedit', $data);
		$this->load->view('templates/footer');
		} else {
			$data = [
				'kd_brg' => $this->input->post('kd_brg'),
				'nama_brg' => $this->input->post('nama_brg'),
				'modal' => $this->input->post('modal'),
				'jual' => $this->input->post('jual'),
				'stok' => $this->input->post('stok'),
				'tanggal' => time()
			];
			$this->db->where('id', $this->input->post('id'));
        	$this->db->update('t_planetkimia', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Update Barang Berhasil
			</div>');
			redirect('t_planetkimia');
		}
	}



		public function tpk_stok($id){
		$data['title'] = 'PLanet Kimia Tokped';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('t_planetkimia', ['id' => $id])->row_array();
		
		$this->form_validation->set_rules('stok','Stok','required');
		
		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('tokped/tpktambah', $data);
		$this->load->view('templates/footer');
		} else {
		$this->T_planetkimiam->get_bahan($this->input->post('bahan_id'));
		$this->db->set('stok','stok+'. $this->input->post('stok'), FALSE);
        $this->db->where('id', $id);
        $this->db->update('t_planetkimia');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Tambah Stok Berhasil
			</div>');
			redirect('t_planetkimia');
		}
	}

	public function saveimport()
    {
      if(isset($_FILES["file"]["name"]))
      {
        $path = $_FILES["file"]["tmp_name"];
        $object = PHPExcel_IOFactory::load($path);
        foreach($object->getWorksheetIterator() as $worksheet)
        {
          $highestRow = $worksheet->getHighestRow();
          $highestColumn = $worksheet->getHighestColumn();
          for($row=2; $row<=$highestRow; $row++)
           {   
             $kd_brg = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
             $nama_brg = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
             $jenis = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
             $modal = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
             $jual = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
             $stok = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
             
             $bahan_id = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
             $data[] = array(
                      'kd_brg'        =>    $kd_brg,
                      'nama_brg'            =>    $nama_brg,
                      'jenis'        =>    $jenis,
                      'modal'            =>    $modal,
                      'jual'        =>    $jual,
                      'stok'            =>    $stok,
                      'tanggal'        =>    time(),
                      'bahan_id'        =>    $bahan_id
                     );
            }
        }
        $this->T_planetkimiam->insertimport($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Import Berhasil
      </div>');
      redirect('t_planetkimia');
      }                
    
    }



	

	}

?>