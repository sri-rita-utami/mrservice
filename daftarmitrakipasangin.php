<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "mrservice";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

//Data akan disimpan Baru
if (isset($_POST['idaftar'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO kipasangin (Username, Nama_Perusahaan, Deskripsi, Pengalaman_Kerja, Nohp, Email, Password, Alamat)
                                                                        VALUES ('$_POST[username]', 
                                                                                '$_POST[nama]',
                                                                                '$_POST[deskripsi]', 
                                                                                '$_POST[pengalaman]',
                                                                                '$_POST[nohp]',
                                                                                '$_POST[email]',
                                                                                '$_POST[password]',    
                                                                                '$_POST[alamat]')                                                                                                                                                                                                                                                                                                                                                                                                       
                                                                                ");
    if ($simpan) //jika berhasil disimpan
    {
        echo "<script>
                        alert('Berhasil Mendaftar!');
                        document.location='loginmitra.php';
                </script>";
    } else //jika gagal disimpan
    {
        echo "<script>
                        alert('Gagal Mendaftar!!');
                        document.location='loginmitra.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mitra Jasa Kipas Angin</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/A.css">
</head>

<body>
    <br /><br />
    <img class="tengah" src="logo.jpeg" /><br />
    <h1 class="text-center">MR SERVICE</h1>
   <div class="data-form">
        <form method="post" action="#">
            <h6 style="text-align:center">Pendaftaran Mitra Jasa Kipas Angin</h6>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="contoh : mandala" required>
            </div>
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" name="nama" class="form-control" placeholder="contoh : PT. Mandala" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="contoh : 13/04/1990" required>
            </div>
            <div class="form-group">
                <label>Pengalaman Kerja</label>
                <input type="text" name="pengalaman" class="form-control" placeholder="contoh : Pengalaman Kerja Anda" required>
            </div>
            <div class="form-group">
                <label>No. hp</label>
                <input type="text" name="nohp" class="form-control" placeholder="contoh : 081320202020" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="contoh : mandala@gmail.com" required>
            </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password Anda" required>
                </div>
                <div class="form-group">
                <label>Alamat Perusahaan</label>
                <input type="text" name="alamat" class="form-control" placeholder="Jl Sianta No. 3" required>
                </div>
                <div class="d-flex">
                    <div class="mt-3"></div>
                    <div class="mr-auto p-0">
                        <button type="button" class="btn btn-dark center-block" onclick="history.back();">Batal</button>
                    </div>
                    <div class="ml-auto p-0">
                        <button type="submit" class="btn btn-success center-block" name="idaftar">Daftar</button>
                    </div>
                </div>
          </form>
      </div>
    </div>
</body>
</html>