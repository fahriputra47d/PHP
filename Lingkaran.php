<?php 
require_once 'Bentuk2D.php';

class Lingkaran extends Bentuk2D{
    public $r;

    public function __construct($nama, $ket, $jari2){
        parent::__construct($nama,$ket);
        $this->r = $jari2;
    }

    public function namaBidang($nama){
        $this->namaBidang = $nama;
        return $nama;
    }

    public function luasBidang($jari2){
        $this->r = $jari2;

        $luas = round(pi(), 2) * $jari2 * $jari2;
        return $luas;
    }

    public function kelilingBidang($jari2){
        $this->r = $jari2;

        $keliling = 2 * round(pi(), 2) * $jari2;
        return $keliling;
    }

    public function mencetak(){
        echo '<td>'.$this->namabidang; echo '</td>';
        echo '<td>'.$this->keterangan; echo '</td>';
        echo '<td>'.$this->luasBidang($this->r); echo '</td>';
        echo '<td>'.$this->kelilingBidang($this->r); echo '</td>';
    }

}


?>