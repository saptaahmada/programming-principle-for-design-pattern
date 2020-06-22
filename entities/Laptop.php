<?php

class Laptop
{
	private $kode;
	private $merk;
	private $warna;

	public function __construct($kode = '', $merk = '', $warna = '') 
	{
		$this->kode = $kode;
		$this->merk = $merk;
		$this->warna = $warna;
	}

	public function getKode()
	{
		return $this->kode;
	}
	public function getMerk() 
	{
		return $this->merk;
	}
	public function getWarna() 
	{
		return $this->warna;
	}

	public function setKode($kode)
	{
		$this->kode = $kode;
	}
	public function setMerk($merk) 
	{
		$this->merk = $merk;
	}
	public function setWarna($warna) 
	{
		$this->warna = $warna;
	}

}

?>