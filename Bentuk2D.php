<?php 
abstract class Bentuk2D{
    public $namabidang;
    public $keterangan;

    public function __construct($nama, $ket){
        $this->namabidang = $nama;
        $this->keterangan = $ket;
    }
}
?>