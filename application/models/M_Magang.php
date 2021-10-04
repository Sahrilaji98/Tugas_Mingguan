<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Magang extends CI_Model
{

	function getDataMagang()
	{
		$query = $this->db->get('sahril');
		return $query->result();
	}

	function insertDataMagang($data)
	{
		$this->db->insert('sahril', $data);
	}

	function getDataMagangDetail($nim)
	{
		$this->db->where('nim', $nim);
		$query = $this->db->get('sahril');
		return $query->row();
	}

	function updateDataMagang($nim, $data)
	{
		$this->db->where('nim', $nim);
		$this->db->update('sahril', $data);
	}

	function deleteDataMagang($nim)
	{
		$this->db->where('nim', $nim);
		$this->db->delete('sahril');
	}
}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */