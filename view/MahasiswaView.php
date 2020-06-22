<?php

class MahasiswaView implements View
{
	public function show($data) 
	{
		echo 'NRP : '.$data->getNrp().'<br>';
		echo 'Nama : '.$data->getNama().'<br>';
		echo 'Alamat : '.$data->getAlamat().'<br>';
	}

	public function showAll($listData)
	{
		$laptopView = new laptopView;

		foreach ($listData as $index => $data) 
		{
			echo 'Mahasiswa ke-'.($index+1).'<br>';
			$this->show($data);
			$laptopView->showAll($data->getListLaptop());
			echo '<br>';
		}
	}
}