<?php

//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "mrservice";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Mesin Cuci</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <!-- Awal Card Tabel -->
        <div class="card mt-3" style="background-color: lightblue;">
            <div class="card-header text-black text-center">
                <b>SERVICE MESIN CUCI</b>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <style type="text/css">
                        table td {
                            border-width: 1px;
                            padding: 8px;
                            border-style: solid;
                            border-color: white;
                            background-color: lightblue;
                        }
                    </style>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Deskripsi Perusahaan</th>
                        <th>Pengalaman Kerja</th>
                        <th>No. HP/WA</th>
                        <th>Alamat Perusahaan</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * from mesincuci order by idmesincuci desc");
                    while ($data = mysqli_fetch_array($tampil)) {

                    ?>
                        <tr>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['deskripsi'] ?></td>
                            <td><?= $data['pengalaman'] ?></td>
                            <td><?= $data['nohp'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                        </tr>
                    <?php } //penutup perulangan while 
                    ?>
                </table>

            </div>
        </div>
        <!-- Akhir Card Tabel -->

    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>