<?php

class Person
{
	private $nama;
	private $alamat;

	public function __construct($nama = '', $alamat = '') 
	{
		$this->nama = $nama;
		$this->alamat = $alamat;
	}

	public function getNama() 
	{
		return $this->nama;
	}
	public function getAlamat() 
	{
		return $this->alamat;
	}

	public function setNama($nama) 
	{
		$this->nama = $nama;
	}
	public function setAlamat($alamat) 
	{
		$this->alamat = $alamat;
	}
}

?>