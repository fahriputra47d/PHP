<?php 
require_once 'Bentuk2D.php';

class Segitiga extends Bentuk2D{
    public $t;
    public $a;
    public $s1;
    public $s2;

    public function __construct($nama, $ket, $tinggi, $alas, $sisi1, $sisi2){
        parent::__construct($nama,$ket);
        $this->t = $tinggi;
        $this->a = $alas;
        $this->s1 = $sisi1;
        $this->s2 = $sisi2;
    }

    public function namaBidang($nama){
        $this->namaBidang = $nama;
        return $nama;
    }

    public function luasBidang($t, $a){
        $this->t = $t;
        $this->a = $a;

        $luas = 0.5 * $t * $a;
        return $luas;
    }

    public function kelilingBidang($t, $a, $s1, $s2){
        $this->t = $t;
        $this->a = $a;
        $this->s1 = $s1;
        $this->s2 = $s2;

        $sisi3 = pow($s1, 2) + pow($s2, 2);

        $s3 = sqrt($sisi3);

        $keliling = $s1 + $s2 + $s3;
        return $keliling;
    }

    public function mencetak(){
        echo '<td>'.$this->namabidang; echo '</td>';
        echo '<td>'.$this->keterangan; echo '</td>';
        echo '<td>'.$this->luasBidang($this->t, $this->a); echo '</td>';
        echo '<td>'.$this->kelilingBidang($this->t, $this->a, $this->s1, $this->s2); echo '</td>';
    }

}


?>