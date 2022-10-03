<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<?php 

require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$l1 = new Lingkaran('Lingkaran 1','Bentuk Lingkaran', 14);
$l2 = new Lingkaran('Lingkaran 2','Bentuk Lingkaran', 20);
$p1 = new PersegiPanjang('Persegi Panjang 1','Bentuk Persegi Panjang', 20, 4);
$p2 = new PersegiPanjang('Persegi Panjang 2','Bentuk Persegi Panjang', 10, 5.5);
$s1 = new Segitiga('Segitiga 1','Bentuk Segitiga', 12, 5, 4, 2);
$s2 = new Segitiga('Segitiga 2','Bentuk Segitiga', 18, 4, 6, 8);

$data = [$l1, $l2, $p1, $p2, $s1, $s2];
$i = 1;
$count = count($data);

    echo '<div class="container px-5 my-5">';
    echo '<h2 align="center"> Bentuk-Bentuk 2D </h2><br>';

    echo    '<table class="table mb-3">';
    echo        '<thead>';
    echo            '<tr bgcolor="aqua">';
    echo            '<th scope="col">No</th>';
    echo            '<th scope="col">Nama Bidang</th>';
    echo            '<th scope="col">Keterangan</th>';
    echo            '<th scope="col">Luas Bidang</th>';
    echo            '<th scope="col">Keliling Bidang</th>';
    echo            '</tr>';
    echo        '</thead>';
    echo        '<tbody>';

foreach($data as $d){
    echo        '<tr align="justify">';
    echo        "<td>$i</td>";
    echo $d->mencetak();
    
    $i++;
}

?>