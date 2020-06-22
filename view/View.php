<?php

interface View
{
	public function show($data);

	public function showAll($listData);
}