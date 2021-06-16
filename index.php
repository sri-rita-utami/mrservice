<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "mrservice";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <div class="img" align="center">
    <img src="logo.jpeg" width="100" align="center">

    <title>Mr Service</title>

    <title>Login Sebagai :</title>
      </div>
    <nav>
      <ul>
      
          </ul>
    </nav>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style type="text/css">

body{
    background-color: white ; 
}

.contact-form{
  width: 85%;
  max-width: 600px;
  background: lightblue; 
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: lightblue;
  font-family: "Montserrat",sans-serif;
}
.contact-form h1{
  margin-top: 0;
  font-weight: 350;
  color : rgb(141, 20, 20);
}

.txtb{
  border:1px aqua;
  margin: 8px 0;
  padding: 12px 18px;
  border-radius: 8px;
}
.txtb label{
  display: block;
  text-align: left;
  color: #333;
  text-transform: uppercase;
  font-size: 14px;
}
.txtb input,.txtb textarea{
  width: 100%;
  border: none;
  background: #FDACFF;
  outline: none;
  font-size: 18px;
  margin-top: 6px;
}
.btn{
  display: inline-block;
  background: white;
  padding: 20px 0;
  color: black;
  text-transform: uppercase;
  cursor: pointer;
  margin-top: 10px;
  width: 100%;
}
  </style>
  </head>
  <body class="bg">
    <div class="container">
    <nav >
      <ul>
    </nav>
  </div>
  <form>
  <div class="contact-form">
    <h1>MR SERVICE</h1>
     <h2>Login Sebagai :</h2>
    <div class="txtb">
    <a href = "logincustomer.php" class="btn" type="login">Customer</a>
    <a href = "loginmitra.php" class="btn" type="login">Mitra</a>

    </div>
  
  </div>
  </form>
  </body>
</html>
