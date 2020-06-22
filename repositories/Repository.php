<?php

interface Repository
{
	public function getAll();

	public function find($id);

	public function findIndex($id);

	public function add($data);

	public function update($id, $data);

	public function delete($id);

}

?>