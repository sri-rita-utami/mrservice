<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "mrservice";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

if (isset($_POST['login'])) {
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $login = mysqli_query($koneksi, "select * from customer where username='$Username'");
    $cek = mysqli_num_rows($login);

    if ($cek === 1) {
        $fetch_pass = mysqli_fetch_assoc($login);
        $cek_password = $fetch_pass['password'];

        if ($cek_password <> $Password) {
            echo "<script>alert('Password salah');</script>";
        } else {
            echo "<script>alert('Login Berhasil');
                document.location='indexcustomer.html'</script>";
        }
    } else {
        echo "<script>alert('Username salah atau belum terdaftar');</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/A.css">
</head>

<body>
    <br /><br />
    <img class="tengah" src="logo.jpeg" /><br />
    <div class="data-form">
        <form method="post" action="#">
            <h6 style="text-align:center"><b>MR SERVICE</b></h6>
            <h6 style="text-align:center"><b>Login sebagai Customer :</b></h6>
            <div class="form-group">
                <label>Username</label>
                <input type="varchar" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="btn_login">
                <button type="submit" name="login" class="btn btn-block login">LOGIN</button>
            </div><br>
            <hr color="black">
            <center>
                <a class="link" href="Bantuan.html">Forgot Password?</a><br>
                <a class="link" href="daftarcustomer.php">Don't have an account? Register Now!</a>
            </center>

        </form>
    </div>
    </div>
    </div>
</body>

</html>