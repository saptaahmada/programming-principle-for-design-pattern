<?php

require 'entities/Mahasiswa.php';
require 'entities/Laptop.php';
require 'repositories/Repository.php';
require 'repositories/MahasiswaRepository.php';
require 'repositories/LaptopRepository.php';
require 'view/View.php';
require 'view/MahasiswaView.php';
require 'view/LaptopView.php';

$mahasiswaRepository = new MahasiswaRepository;
$laptopRepository1 = new LaptopRepository;
$laptopRepository2 = new LaptopRepository;
$mahasiswaView = new MahasiswaView;
$laptopView = new LaptopView;

$mahasiswaRepository->add(new Mahasiswa('2110195003', 'Sapta Ahmad Afrizal', 'Jombang'));
$mahasiswaRepository->add(new Mahasiswa('2110195004', 'Rafidah Putri', 'Malang'));

$laptopRepository1->add(new Laptop('1', 'Lenovo', 'Hitam'));
$laptopRepository1->add(new Laptop('2', 'Lenovo Thinkpad', 'Hitam'));
$laptopRepository1->add(new Laptop('3', 'Asus', 'Putih'));

$laptopRepository2->add(new Laptop('4', 'Acer', 'Biru'));
$laptopRepository2->add(new Laptop('4', 'Samsung', 'Hitam'));

$nrpMhs1 = '2110195003';
$nrpMhs2 = '2110195004';

$mahasiswa1 = $mahasiswaRepository->find($nrpMhs1);
$mahasiswa1->setListLaptop($laptopRepository1->getAll());
$mahasiswaRepository->update($nrpMhs1, $mahasiswa1);

$mahasiswa2 = $mahasiswaRepository->find($nrpMhs2);
$mahasiswa2->setListLaptop($laptopRepository2->getAll());
$mahasiswaRepository->update($nrpMhs2, $mahasiswa2);

$mahasiswaView->showAll($mahasiswaRepository->getAll());