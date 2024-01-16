<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_data_a_model extends CI_Model{
	// model jurusan
	public function tampilDataSasaranP1($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s1', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s1a', $keyword);
	        $this->db->or_like('skor_s1b', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP2($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s2', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s2a', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP3($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s3', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s3a', $keyword);
	        $this->db->or_like('skor_s3b', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP4($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s4', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s4a', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP5($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s5', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s5a', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP6($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s6', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s6a', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP7($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s7', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s7a', $keyword);
	        $this->db->or_like('skor_s7b', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP8($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s8', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s8a', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP9($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s9', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s9a', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP10($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s10', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s10a', $keyword);
	        $this->db->or_like('skor_s10b', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP11($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s11', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s11a', $keyword);
	        $this->db->or_like('skor_s11b', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP12($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s12', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s12a', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP13($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s13', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s13a', $keyword);
	        $this->db->or_like('skor_s13b', $keyword);
			$this->db->or_like('skor_s13c', $keyword);
		}

		return $this->db->get($table);
	}


	public function tampilDataSasaranP14($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_skor_s14', $keyword);
	        $this->db->or_like('username', $keyword);
	        $this->db->or_like('skor_s14a', $keyword);
	        $this->db->or_like('skor_s14b', $keyword);
			$this->db->or_like('skor_s14c', $keyword);
		    $this->db->or_like('skor_s14d', $keyword);
			$this->db->or_like('skor_s14e', $keyword);
		}

		return $this->db->get($table);
	}



public function update_skors1($where, $table, $data)
	{
		$data = [
	 		 	'skor_s1a'   		  	=> htmlspecialchars($this->input->post('skor_s1a', true)),
	 		 	'skor_s1b'   	   		=> htmlspecialchars($this->input->post('skor_s1b', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_1', $data);
	}


public function update_skors2($where, $table, $data)
	{
		$data = [
	 		 	'skor_s2a'   		  	=> htmlspecialchars($this->input->post('skor_s2a', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_2', $data);
	}


public function update_skors3($where, $table, $data)
	{
		$data = [
	 		 	'skor_s3a'   		  	=> htmlspecialchars($this->input->post('skor_s3a', true)),
	 		 	'skor_s3b'   	   		=> htmlspecialchars($this->input->post('skor_s3b', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_3', $data);
	}


public function update_skors4($where, $table, $data)
	{
		$data = [
	 		 	'skor_s4a'   		  	=> htmlspecialchars($this->input->post('skor_s4a', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_4', $data);
	}



public function update_skors5($where, $table, $data)
	{
		$data = [
	 		 	'skor_s5a'   		  	=> htmlspecialchars($this->input->post('skor_s5a', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_5', $data);
	}


public function update_skors6($where, $table, $data)
	{
		$data = [
	 		 	'skor_s6a'   		  	=> htmlspecialchars($this->input->post('skor_s6a', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_6', $data);
	}



public function update_skors7($where, $table, $data)
	{
		$data = [
	 		 	'skor_s7a'   		  	=> htmlspecialchars($this->input->post('skor_s7a', true)),
				'skor_s7b'   		  	=> htmlspecialchars($this->input->post('skor_s7b', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_7', $data);
	}


public function update_skors8($where, $table, $data)
	{
		$data = [
	 		 	'skor_s8a'   		  	=> htmlspecialchars($this->input->post('skor_s8a', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_8', $data);
	}


public function update_skors9($where, $table, $data)
	{
		$data = [
	 		 	'skor_s9a'   		  	=> htmlspecialchars($this->input->post('skor_s9a', true)),
	 		 	'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_9', $data);
	}



public function update_skors10($where, $table, $data)
	{
		$data = [
	 		 	'skor_s10a'   		  	=> htmlspecialchars($this->input->post('skor_s10a', true)),
	 		 	'skor_s10b'   		  	=> htmlspecialchars($this->input->post('skor_s10b', true)),
				'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_10', $data);
	}



public function update_skors11($where, $table, $data)
	{
		$data = [
	 		 	'skor_s11a'   		  	=> htmlspecialchars($this->input->post('skor_s11a', true)),
	 		 	'skor_s11b'   		  	=> htmlspecialchars($this->input->post('skor_s11b', true)),
				'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('sasaran_program_11', $data);
	}


	
public function update_skors12($where, $table, $data)
{
	$data = [
			  'skor_s12a'   		  	=> htmlspecialchars($this->input->post('skor_s12a', true)),
			  'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
		 ];

		// insert kedalam database
		 $this->db->where($where);
		$this->db->update('sasaran_program_12', $data);
}



public function update_skors13($where, $table, $data)
{
	$data = [
			  'skor_s13a'   		  	=> htmlspecialchars($this->input->post('skor_s13a', true)),
			  'skor_s13b'   		  	=> htmlspecialchars($this->input->post('skor_s13b', true)),
			  'skor_s13c'   		  	=> htmlspecialchars($this->input->post('skor_s13c', true)), 
			  'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
		 ];

		// insert kedalam database
		 $this->db->where($where);
		$this->db->update('sasaran_program_13', $data);
}


public function update_skors14($where, $table, $data)
{
	$data = [
			  'skor_s14a'   		  	=> htmlspecialchars($this->input->post('skor_s14a', true)),
			  'skor_s14b'   		  	=> htmlspecialchars($this->input->post('skor_s14b', true)),
			  'skor_s14c'   		  	=> htmlspecialchars($this->input->post('skor_s14c', true)),
			  'skor_s14d'   		  	=> htmlspecialchars($this->input->post('skor_s14d', true)),
			  'skor_s14e'   		  	=> htmlspecialchars($this->input->post('skor_s14e', true)), 
			  'username' 	   		   	=> htmlspecialchars($this->input->post('username', true))
		 ];

		// insert kedalam database
		 $this->db->where($where);
		$this->db->update('sasaran_program_14', $data);
}


	public function tampilListMaps($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_maps', $keyword);
	        $this->db->or_like('nama_vihara', $keyword);
	        $this->db->or_like('link_alamat', $keyword);
			$this->db->or_like('nama_ketua', $keyword);
			$this->db->or_like('foto_vihara', $keyword);
			$this->db->or_like('alamat', $keyword);
		}

		return $this->db->get('tb_maps');
	}

	//public function tampilListMaps1($where, $data, $table)
	//{
	//	$data=[
	//		'id_maps'		=> htmlspecialchars($this->input->post('id_maps',true)),
	//		'nama_vihara'	=> htmlspecialchars($this->input->post('nama_vihara', true)),
	//		'link_alamat'	=> htmlspecialchars($this->input->post('link_alamat', true)),
	//		'nama_ketua'	=> htmlspecialchars($this->input->post('nama_ketua',true)),
	//		'foto_vihara'	=> htmlspecialchars($this->input->post('foto_vihara', true)),
	//		'alamat'		=> htmlspecialchars($this->input->post('alamat',true))
	//	];
	//	$this->db->where($where);
	//	$this->db->update('tb_maps', $data);
	//}

	public function update_vihara_test($where, $table, $data)
	{
		$data = [
	 		 	'id_maps'   		   => htmlspecialchars($this->input->post('id_maps', true)),
	 		 	'nama_vihara'   	   => htmlspecialchars($this->input->post('nama_vihara', true)),
	 		 	'link_alamat' 	   	   => htmlspecialchars($this->input->post('link_alamat', true)),
	 		 	'alamat'    		   => htmlspecialchars($this->input->post('alamat', true)),
	 		 	'nama_ketua' 	   	   => htmlspecialchars($this->input->post('nama_ketua', true))
	 		];

			// insert kedalam database
	 		$this->db->where($where);
			$this->db->update('tb_maps', $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function tampilSrcMaps($where, $table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('id_maps', $keyword);
	        $this->db->or_like('nama_vihara', $keyword);
	        $this->db->or_like('link_alamat', $keyword);
			$this->db->or_like('nama_ketua', $keyword);
			$this->db->or_like('foto_vihara', $keyword);
			$this->db->or_like('alamat', $keyword);
		}

		return $this->db->get_where($table, $where);
	}

	public function hapus_data_vihara($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


}