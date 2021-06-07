<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bahanbaku extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->model('M_bahanbaku');
		
	}

	public function index(){
		$data['title'] = 'Bahan Baku';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		//set params
  		$params = array();
  		//set records per page
        $limit_page = 10;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total = $this->M_bahanbaku->get_total();

        if ($total > 0) 
        {
            // get current page records
            $data['results'] = $this->M_bahanbaku->get_current_page($limit_page, $page * $limit_page);
             
            $config['base_url'] = site_url() . 'bahanbaku';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;

            //paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
            
            //bootstrap pagination 
            $config['first_link']       = 'First';
	        $config['last_link']        = 'Last';
	        $config['next_link']        = 'Next';
	        $config['prev_link']        = 'Prev';
	        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $config['full_tag_close']   = '</ul></nav></div>';
	        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $config['num_tag_close']    = '</span></li>';
	        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['prev_tagl_close']  = '</span>Next</li>';
	        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $config['first_tagl_close'] = '</span></li>';
	        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['last_tagl_close']  = '</span></li>';


		             
		            $this->pagination->initialize($config);
		             
		            // build paging links
		            $data['links'] = $this->pagination->create_links();
		        }
		         
		 
		 //end pagination
		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('expired','Expired','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		
		
		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('bahanbaku/bahanbaku', $data);
		$this->load->view('templates/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'expired' => $this->input->post('expired'),
				'jumlah' => $this->input->post('jumlah'),
				
				'tanggal' => time()
			];
			$this->db->insert('bahanbaku',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Tambah Barang Berhasil
			</div>');
			redirect('bahanbaku');
		}

	}

	public function pk_delete($id){
		$data['title'] = 'Bahan Baku';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('bahanbaku', ['id' => $id])->row_array();

		$this->form_validation->set_rules('pass','Stok','required');

		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('bahanbaku/pkdelete', $data);
		$this->load->view('templates/footer');
		} else {
			if ($this->input->post('pass') == "luxmanabadi"){
			$this->db->where('id', $id);
	        $this->db->delete('bahanbaku');
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Barang Berhasil Dihapus
			</div>');
            redirect('bahanbaku','refresh');
			} 
		
			else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Password salah
			</div>');
				redirect('bahanbaku');
			} 
		
		}
	}

	public function pk_pass($id){
		$data['title'] = 'Bahan Baku';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('bahanbaku', ['id' => $id])->row_array();

		$this->form_validation->set_rules('pass','Stok','required');

		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('bahanbaku/pkpass', $data);
		$this->load->view('templates/footer');
		} else {
			if ($this->input->post('pass') == "luxmanabadi"){
			$this->pk_edit($id);
			} 
		
			else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Password salah
			</div>');
				redirect('bahanbaku');
			} 
		
		}
	}

	public function pk_edit($id){
		$data['title'] = 'Bahan Baku';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('bahanbaku', ['id' => $id])->row_array();
	    $this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('expired','Expired','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		
		
		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('bahanbaku/pkedit', $data);
		$this->load->view('templates/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'expired' => $this->input->post('expired'),
				'jumlah' => $this->input->post('jumlah'),
				
				'tanggal' => time()
			];
			$this->db->where('id', $this->input->post('id'));
        	$this->db->update('bahanbaku', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Update Barang Berhasil
			</div>');
			redirect('bahanbaku');

					}
	}





	public function pk_search(){
			$data['title'] = 'Bahan Baku';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$keyword = $this->input->post('keyword');
			
			$data['results']=$this->M_bahanbaku->get_product_pksearch($keyword);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('bahanbaku/pksearch',$data);
			$this->load->view('templates/footer');
	}
	public function pk_stok($id){
		$data['title'] = 'Bahan Baku';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('bahanbaku', ['id' => $id])->row_array();
		
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		
		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('bahanbaku/pktambah', $data);
		$this->load->view('templates/footer');
		} else {
		$this->db->set('jumlah','jumlah+'. $this->input->post('jumlah'), FALSE);
        $this->db->where('id', $id);
        $this->db->update('bahanbaku');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Tambah Stok Berhasil
			</div>');
			redirect('bahanbaku');
		}
        
	}


	}

?>