<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model{
	// model jurusan
	public function tampilData($table, $keyword = null)
	{

		if ($keyword) {
			$this->db->like('name_user', $keyword);
	        $this->db->or_like('username', $keyword);
		}

		return $this->db->get($table);
	}

	public function editData($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function updateAccountMember($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function deleteAccountMember($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function editTabel($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function updateTabel($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function deleteTabel($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tambahTabel()
	{
		$data = [
	 		 	'pt'   => htmlspecialchars($this->input->post('pt', true)),
	 		 	'nim'    => htmlspecialchars($this->input->post('nim', true)),
	 		 	'nama' => htmlspecialchars($this->input->post('nama', true)),
	 		 	'prodi' => htmlspecialchars($this->input->post('prodi', true))
	 		];
		// insert kedalam database
		$this->db->insert('mahasiswa', $data);
	}
}