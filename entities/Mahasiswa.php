<?php

require 'Person.php';

class Mahasiswa extends Person
{
	private $nrp;
	private $listLaptop;

	public function __construct($nrp = '', $nama = '', $alamat = '') {
		parent::__construct($nama, $alamat);
		$this->nrp = $nrp;
		$this->nama = $nama;
		$this->alamat = $alamat;
		$this->listLaptop = [];
	}

	public function getNrp() 
	{
		return $this->nrp;
	}
	public function getListLaptop() 
	{
		return $this->listLaptop;
	}

	public function setNrp($nrp) 
	{
		$this->nrp = $nrp;
	}
	public function setListLaptop($listLaptop) 
	{
		$this->listLaptop = $listLaptop;
	}

}

?>