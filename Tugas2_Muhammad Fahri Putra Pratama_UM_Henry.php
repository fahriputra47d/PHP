<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan Form PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <form class="border border-light p-5" method="POST">
            
            <p class="h4 mb-4 text-center">Form Input Data Pegawai</p>
            
            <div class="container px-5 my-5">
                <div class="form-floating mb-3">
                    <input class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" name="nama" />
                    <label for="namaPegawai">Nama Pegawai</label>
                    <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="agama" aria-label="Agama" name="agama">
                        <option value=""></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <label for="agama">Agama</label>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Jabatan</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="manager" type="radio" name="jabatan" data-sb-validations="" value="Manager"/>
                        <label class="form-check-label" for="manager">Manager</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="asisten" type="radio" name="jabatan" data-sb-validations="" value="Asisten"/>
                        <label class="form-check-label" for="asisten">Asisten</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="kabag" type="radio" name="jabatan" data-sb-validations="" value="Kabag"/>
                        <label class="form-check-label" for="kabag">Kabag</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="staff" type="radio" name="jabatan" data-sb-validations="" value="Staff"/>
                        <label class="form-check-label" for="staff">Staff</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Status Pernikahan</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="sudahMenikah" type="radio" name="status" data-sb-validations="" value="Sudah" />
                        <label class="form-check-label" for="sudahMenikah">Sudah Menikah</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="belumMenikah" type="radio" name="status" data-sb-validations="" value="Belum" />
                        <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" name="anak"/>
                    <label for="jumlahAnak">Jumlah Anak</label>
                    <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" name="proses" type="submit">Submit</button><br>
                </div>
            </form> 
           
        <?php 
        //Tangkap Request
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $anak = $_POST['anak'];
        $tombol = $_POST['proses'];

        //Tentukan Gaji Pokok
        switch($jabatan){
            case 'Manager': $gaji = 20000000; break;
            case 'Asisten': $gaji = 15000000; break;
            case 'Kabag': $gaji = 10000000; break;
            case 'Staff': $gaji = 4000000; break;
            default: $gaji = '';
        }

        //Tentukan Tunjangan Jabatan
        $tun_jab = $gaji * 0.2;

        //Tentukan Tunjangan Keluarga
        if($status == 'Sudah' && $anak <= 2){
            $tun_kel = $gaji * 0.05; 
        } 
        else if($status == 'Sudah' && 3 <= $anak && $anak <= 5){
            $tun_kel = $gaji * 0.1; 
        } 
        else if($status == 'Sudah' && $anak > 5){
            $tun_kel = $gaji * 0.15; 
        }
        else if($status == 'Belum'){
            $tun_kel = 0;
        } 

        //Tentukan Gaji Kotor
        $gajikotor = $gaji + $tun_jab + $tun_kel;

        //Tentukan Zakat Profesi
        $zakat = ($agama == 'Islam' && $gajikotor >= 6000000) ? 0.025 * $gajikotor : 0;

        //Tentukan Take Home Pay
        $homepay = $gajikotor - $zakat;
        
        if(isset($tombol)){ ?>

        <table align='center' cellpadding='10' cellspacing='0'>
        <thead>
            <tr bgcolor='gray' align='center'>
                <th> Nama Pegawai </th>
                <th> Agama </th>
                <th> Jabatan Pegawai </th>
                <th> Status Perkawinan </th>
                <th> Jumlah Anak </th>
                <th> Gaji Pokok </th>
                <th> Tunjangan Jabatan </th>
                <th> Tunjangan Keluarga </th>
                <th> Gaji Kotor </th>
                <th> Zakat Profesi </th>
            </tr>
        </thead>
        <tbody>
            <tr align='center'>
                <td> <?= $nama ?> </td>
                <td> <?= $agama ?> </td>
                <td> <?= $jabatan ?> </td>
                <td> <?= $status ?> </td>
                <td> <?= $anak ?> </td>
                <td> Rp.<?= $gaji ?> </td>
                <td> Rp.<?= $tun_jab ?> </td>
                <td> Rp.<?= $tun_kel ?> </td>
                <td> Rp.<?= $gajikotor ?> </td>
                <td> Rp.<?= $zakat ?> </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan='2' bgcolor='ocean' align='center'> Total Gaji </th>
                <th colspan='5' align='center'> Rp.<?= $homepay ?> </th>
            </tr>
        </tfoot>
    </table>
        <?php } ?>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

</html>