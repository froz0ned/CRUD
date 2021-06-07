<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_M extends CI_Model {
	
        
    function get_namabrg($kd_brg){                   
	    $sql = "SELECT nama_brg FROM b_planetkimia WHERE kd_brg= '{$kd_brg}' UNION SELECT nama_brg FROM b_luxmanabadi WHERE kd_brg= '{$kd_brg}' UNION SELECT nama_brg FROM pt_palapa WHERE kd_brg= '{$kd_brg}' UNION SELECT nama_brg FROM s_luxmanabadi WHERE kd_brg= '{$kd_brg}' UNION SELECT nama_brg FROM s_pharmapreneur WHERE kd_brg= '{$kd_brg}' UNION SELECT nama_brg FROM s_planetkimia WHERE kd_brg= '{$kd_brg}' UNION SELECT nama_brg FROM t_luxuryprojects WHERE kd_brg= '{$kd_brg}' UNION SELECT nama_brg FROM t_planetkimia WHERE kd_brg= '{$kd_brg}'";
			
			return $this->db->query($sql)->row();
	}

	function get_pendapatan($kd_brg){                   
	    $sql = "SELECT jual FROM b_planetkimia WHERE kd_brg= '{$kd_brg}' UNION SELECT jual FROM b_luxmanabadi WHERE kd_brg= '{$kd_brg}' UNION SELECT jual FROM pt_palapa WHERE kd_brg= '{$kd_brg}' UNION SELECT jual FROM s_luxmanabadi WHERE kd_brg= '{$kd_brg}' UNION SELECT jual FROM s_pharmapreneur WHERE kd_brg= '{$kd_brg}' UNION SELECT jual FROM s_planetkimia WHERE kd_brg= '{$kd_brg}' UNION SELECT jual FROM t_luxuryprojects WHERE kd_brg= '{$kd_brg}' UNION SELECT jual FROM t_planetkimia WHERE kd_brg= '{$kd_brg}'";
			
			$get = $this->db->query($sql)->row();

			$pendapatan = $this->input->post('jumlah') * $get->jual;

			return $pendapatan;
	}

	function get_untung($kd_brg){                   
	    $sql = "SELECT jual,modal FROM b_planetkimia WHERE kd_brg= '{$kd_brg}' UNION SELECT jual,modal FROM b_luxmanabadi WHERE kd_brg= '{$kd_brg}' UNION SELECT jual,modal FROM pt_palapa WHERE kd_brg= '{$kd_brg}' UNION SELECT jual,modal FROM s_luxmanabadi WHERE kd_brg= '{$kd_brg}' UNION SELECT jual,modal FROM s_pharmapreneur WHERE kd_brg= '{$kd_brg}' UNION SELECT jual,modal FROM s_planetkimia WHERE kd_brg= '{$kd_brg}' UNION SELECT jual,modal FROM t_luxuryprojects WHERE kd_brg= '{$kd_brg}' UNION SELECT jual,modal FROM t_planetkimia WHERE kd_brg= '{$kd_brg}'";
			
			$get = $this->db->query($sql)->row();

			$untung = ($get->jual - $get->modal) *$this->input->post('jumlah');

			return $untung;
	}
	public function get_stok($kd_brg){
	        
	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('b_planetkimia');

	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('b_luxmanabadi');

	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('pt_palapa');

	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('s_luxmanabadi');

	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('s_pharmapreneur');

	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('s_planetkimia');

	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('t_luxuryprojects');

	        $this->db->set('stok','stok-'. $this->input->post('jumlah'), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('t_planetkimia');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('b_planetkimia');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('b_luxmanabadi');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('pt_palapa');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('s_luxmanabadi');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('s_pharmapreneur');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('s_planetkimia');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('t_luxuryprojects');

	        $this->db->set('tanggal', time(), FALSE);
	        $this->db->where('kd_brg', $kd_brg);
	        $this->db->update('t_planetkimia');

}
}