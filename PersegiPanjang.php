<?php 
require_once 'Bentuk2D.php';

class PersegiPanjang extends Bentuk2D{
    public $p1;
    public $p2;

    public function __construct($nama, $ket, $panjang1, $panjang2){
        parent::__construct($nama,$ket);
        $this->p1 = $panjang1;
        $this->p2 = $panjang2;
    }

    public function namaBidang($nama){
        $this->namaBidang = $nama;
        return $nama;
    }

    public function luasBidang($p1, $p2){
        $this->p1 = $p1;
        $this->p2 = $p2;

        $luas = $p1 + $p2;
        return $luas;
    }

    public function kelilingBidang($p1, $p2){
        $this->p1 = $p1;
        $this->p2 = $p2;

        $keliling = 2 * ($p1 + $p2);
        return $keliling;
    }

    public function mencetak(){
        echo '<td>'.$this->namabidang; echo '</td>';
        echo '<td>'.$this->keterangan; echo '</td>';
        echo '<td>'.$this->luasBidang($this->p1, $this->p2); echo '</td>';
        echo '<td>'.$this->kelilingBidang($this->p1, $this->p2); echo '</td>';
    }

}


?>