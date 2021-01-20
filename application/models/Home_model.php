<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function jmlAlternatif()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('alternatif');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jmlLayak()
	{
		$this->db->select('count(*)');
		$this->db->where('ket_alternatif', 'Layak');
		$query = $this->db->get('alternatif');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jmlTdkLayak()
	{
		$this->db->select('count(*)');
		$this->db->where('ket_alternatif', 'Tidak Layak');
		$query = $this->db->get('alternatif');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jmlKriteria()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('kriteria');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jmlSubKriteria()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('sub_kriteria');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

}