<?php 
require 'Pegawai.php';

$fahri = new Pegawai('001','Fahri', 'Manager', 'Islam', 'Belum Menikah');
$jegik = new Pegawai('190', 'Jegik', 'Staff', 'Islam', 'Belum Menikah');
$annas = new Pegawai('535', 'Annas', 'Kabag', 'Islam', 'Sudah Menikah');
$agni = new Pegawai('646', 'Agni', 'Asisten', 'Hindu', 'Sudah Menikah');
$agung = new Pegawai('055', 'Agung', 'Staff', 'Kristen', 'Belum Menikah');

echo '<h3 align="center">'.Pegawai::JUDUL.'</h3>';

$fahri->mencetak();
$jegik->mencetak();
$annas->mencetak();
$agni->mencetak();
$agung->mencetak();

echo 'Jumlah Pegawai: '.Pegawai::$jml;
?>