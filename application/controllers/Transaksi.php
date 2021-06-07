<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transaksi_M');
	
	}

	public function index($id){
		$data['title'] = 'Transaksi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		if($id == 1){
		$query = $this->db->get('transaksi');
		} elseif ($id == 2) {
			$query = $this->db->get_where('transaksi', ['platform' => 'SHOPEE']);
		} elseif ($id == 3) {
			$query = $this->db->get_where('transaksi', ['platform' => 'TOKOPEDIA']);
		} elseif ($id == 4) {
			$query = $this->db->get_where('transaksi', ['platform' => 'BUKALAPAK']);
		} else {
			$query = $this->db->get_where('transaksi', ['platform' => 'WHATSAPP']);
		}
		$data['results'] = $query->result();
		$this->form_validation->set_rules('kd_brg','Kd_brg','required');
	

		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('transaksi/index', $data);
		$this->load->view('templates/footer');
		} else {
			$kd_brg = $this->input->post('kd_brg');
			
			
			$get_namabrg = $this->Transaksi_M->get_namabrg($kd_brg);
			$get_pendapatan = $this->Transaksi_M->get_pendapatan($kd_brg);
			$get_untung = $this->Transaksi_M->get_untung($kd_brg);
			$this->Transaksi_M->get_stok($kd_brg);
			$data = [
				'kd_brg' => $this->input->post('kd_brg'),
				'nama_brg' => $get_namabrg->nama_brg,
				'jumlah' => $this->input->post('jumlah'),
				'pendapatan' => $get_pendapatan,
				'untung' => $get_untung,
				'platform' => $this->input->post('platform'),
				'tanggal' => time(),
				'customer' => $this->input->post('customer')
			];
			$this->db->insert('transaksi',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Tambah Barang Berhasil
			</div>');
			redirect('transaksi/index/1');
		}
	}
	
	public function transaksi_delete($id){
		$data['title'] = 'Transaksi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['read'] = $this->db->get_where('transaksi', ['id' => $id])->row_array();

		$this->form_validation->set_rules('pass','Stok','required');

		if ($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('transaksi/transaksidelete', $data);
		$this->load->view('templates/footer');
		} else {
			if ($this->input->post('pass') == "luxmanabadi"){
			$this->db->where('id', $id);
	        $this->db->delete('transaksi');
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Barang Berhasil Dihapus
			</div>');
            redirect('transaksi/index/1','refresh');
			} 
		
			else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Password salah
			</div>');
				redirect('transaksi/index/1');
			} 
		
		}
	}
}