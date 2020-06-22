<?php

class MahasiswaRepository implements Repository
{
	private $listMahasiswa;

	public function getAll()
	{
		return $this->listMahasiswa;
	}

	public function find($id)
	{
		foreach ($this->listMahasiswa as $mahasiswa) 
		{
			if($mahasiswa->getNrp() == $id) 
			{
				return $mahasiswa;
			}
		}
		return null;
	}

	public function findIndex($id)
	{
		foreach ($this->listMahasiswa as $index => $mahasiswa) 
		{
			if($mahasiswa->getNrp() == $id) 
			{
				return $index;
			}
		}
		return null;
	}

	public function add($data)
	{
		$this->listMahasiswa[] = $data;
	}

	public function update($id, $data)
	{
		$index = $this->findIndex($id);
		$this->listMahasiswa[$index] = $data;
	}

	public function delete($id)
	{
		$index = $this->findIndex($id);
		array_splice($this->listMahasiswa, $index, 1);
	}

}

?>