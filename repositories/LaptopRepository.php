<?php

class LaptopRepository implements Repository
{
	private $listLaptop;

	public function getAll()
	{
		return $this->listLaptop;
	}

	public function find($id)
	{
		foreach ($this->listLaptop as $laptop) 
		{
			if($laptop->getKode() == $id) 
			{
				return $laptop;
			}
		}
		return null;
	}

	public function findIndex($id)
	{
		foreach ($this->listLaptop as $index => $laptop) 
		{
			if($laptop->getKode() == $id) 
			{
				return $index;
			}
		}
		return null;
	}

	public function add($data)
	{
		$this->listLaptop[] = $data;
	}

	public function update($id, $data)
	{
		$index = $this->findIndex($id);
		$this->listLaptop[$index] = $data;
	}

	public function delete($id)
	{
		$index = $this->findIndex($id);
		array_splice($this->listLaptop, $index, 1);
	}

}

?>