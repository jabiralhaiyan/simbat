<?php

class JurusanPTN extends CI_Model
{
	private $IdPTN;
	private $PTN;
	private $IdJurusan;
	private $Jurusan;
	
	public function __construct()
	{
		parent::__construct();
	}
	public function setIdPTN($IdPTN)
	{
		$this->IdPTN = $IdPTN;
	}
	public function setPTN($PTN)
	{
		$this->PTN = $PTN;
	}
	public function setIdJurusan($IdJurusan)
	{
		$this->IdJurusan = $IdJurusan;
	}
	public function setJurusan($Jurusan)
	{
		$this->Jurusan = $Jurusan;
	}
	
	public function getPTN()
	{
		//$result = array();
		$this->load->database();

		$query = $this->db->query
		("
			SELECT * FROM ptn
		");
		
		$this->db->close();
        return $query;
	}

	public function getJurusan()
	{
		//$result = array();
		$this->load->database();

		$query = $this->db->query
		("
			SELECT * FROM jurusan
		");
		
		$this->db->close();
        return $query;
	}

}