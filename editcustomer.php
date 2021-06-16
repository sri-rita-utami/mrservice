<?php
    //Memanggil Koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "mrservice";

    $koneksi = mysqli_connect($server, $user, $password, $database)or die(mysqli_error($koneksi));


    //Pengujian jika tombol Edit di klik
    if(isset($_POST['isimpan']))
    {
        if($_GET['hal']=='edit')
        {
            $edit = mysqli_query($koneksi, "UPDATE datapribadi set
                                                        Username = '$_POST[username]',
                                                        NamaLengkap = '$_POST[nama]', 
                                                        TanggalLahir = '$_POST[tgllhr]', 
                                                        Alamat = '$_POST[alamat]', 
                                                        NoHp = '$_POST[nohp]',
                                                        Email = '$_POST[email]',
                                                        Password = '$_POST[password]'
                                                        where iddata = '$_GET[id]'
                                            ");
            if($edit) //jika berhasil disimpan
            {
                echo "<script>
                            alert('Data Berhasil di Edit!');
                            document.location='serviceac.php';
                    </script>";
            }
            else //jika gagal disimpan
            {
                echo "<script>
                            alert('Data Gagal di Edit!!');
                            document.location='serviceac.php';
                    </script>";
            }
        }
    }
	if(isset($_GET['hal']))
	{
		//Pengujian jika edit Data
		if($_GET['hal'] == "edit")
		{
			//Tampilkan Data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM datapribadi WHERE iddata = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$busername = $data['username'];
                $bnama = $data['nama'];
				$btgllhr = $data['tgllhr'];
                $balamat = $data['alamat'];
				$bnohp = $data['nohp'];
				$bemail = $data['email'];
                $bpassword = $data['password'];

			}
		}
	}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pribadi</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/A.css">
</head>
<body>
<br/><br/>
    <img class="tengah" src="logo.jpeg"/><br/>
        <h1 class="text-center">MR SERVICE</h1>
        <div class="data-form">
                <form method="post" action="#">
                    <h6 style="text-align:center"><b>EDIT DATA PRIBADI</b></h6>
                    <hr color="black">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?=@$data['username']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" value="<?=@$data['nama']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tgllhr" value="<?=@$data['tgllhr']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?=@$data['alamat']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="int" name="nohp" value="<?=@$data['nohp']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?=@$data['email']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" value="<?=@$data['password']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?=@$data['alamat']; ?>" class="form-control" placeholder="Nama Dasawisma" required>
                    </div>
                    <div class="d-flex">
                        <div class="mt-3"></div>
                        <div class="mr-auto p-0">
                            <button type="button" class="btn btn-dark center-block" onclick="history.back();">Batal</button>
                        </div>
                        <div class="ml-auto p-0">
                            <button type="submit" class="btn btn-success center-block" name="isimpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>