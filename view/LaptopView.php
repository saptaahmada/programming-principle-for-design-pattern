<?php

class LaptopView implements View
{
	public function show($data) 
	{
		echo 'Kode : '.$data->getKode().'<br>';
		echo 'Merk : '.$data->getMerk().'<br>';
		echo 'Warna : '.$data->getWarna().'<br>';
	}

	public function showAll($listData)
	{
		foreach ($listData as $index => $data) 
		{
			echo 'Laptop ke-'.($index+1).'<br>';
			$this->show($data);
			echo '<br>';
		}
	}
}