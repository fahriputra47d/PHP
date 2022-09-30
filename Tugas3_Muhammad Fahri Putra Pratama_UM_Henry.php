<?php
//Array Scalar
$m1 = ['nim'=>'001','nama'=>'Ahmad','nilai'=>80];
$m2 = ['nim'=>'002','nama'=>'Fahri','nilai'=>86];
$m3 = ['nim'=>'003','nama'=>'Putra','nilai'=>70];
$m4 = ['nim'=>'004','nama'=>'Pratama','nilai'=>55];
$m5 = ['nim'=>'190','nama'=>'Akbar','nilai'=>85];
$m6 = ['nim'=>'535','nama'=>'Aruna','nilai'=>40];
$m7 = ['nim'=>'646','nama'=>'Vall','nilai'=>75];
$m8 = ['nim'=>'055','nama'=>'Gura','nilai'=>25];
$m9 = ['nim'=>'047','nama'=>'Friter','nilai'=>95];
$m10 = ['nim'=>'666','nama'=>'Frietz','nilai'=>30];

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Peringkat'];

//Array Assosiative 
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//Aggregate Function
$nilai_m = array_column($mahasiswa,'nilai');

$total_nilai = array_sum($nilai_m);
$jumlah_nilai = count($nilai_m);
$max_nilai = max($nilai_m);
$min_nilai = min($nilai_m);
$rata2 = $total_nilai / $jumlah_nilai;

//keterangan
$keterangan = [
    'Jumlah Siswa'=>$jumlah_nilai,
    'Total Nilai'=>$total_nilai,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Rata2'=>$rata2
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container px-5 my-5">
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php 
                    foreach($ar_judul as $jdl){ 
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                    $nilaim = $mhs['nilai'];
                    
                    $ket_lulus = ($nilaim >= 60) ? 'Lulus' : 'Tidak Lulus';

                    if($nilaim >= 85 && $nilaim <= 100) $grade = 'A';
                        else if($nilaim >= 75 && $nilaim < 85) $grade = 'B';
                        else if($nilaim >= 60 && $nilaim < 75) $grade = 'C';
                        else if($nilaim >= 30 && $nilaim < 60) $grade = 'D';
                        else if($nilaim >= 0 && $nilaim < 30) $grade = 'E';
                        else $grade = '';

                    switch ($grade) {
                        case 'A': $predikat = 'Memuaskan'; break;
                        case 'B': $predikat = 'Bagus'; break;
                        case 'C': $predikat = 'Cukup'; break;
                        case 'D': $predikat = 'Kurang'; break;
                        case 'E': $predikat = 'Buruk'; break;
                        default: $predikat = '';
                    }
                    ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $ket_lulus ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                    ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div>
</body>    
</html>
    