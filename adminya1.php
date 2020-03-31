<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
  <style>
     
      .jumbotron{
        text-align: center;
        margin-top: -220px;
        height: 550px;
        background-image: url(A.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
  .fakeimg {
    height: 700px;
    background: #aaa;
  }
  .border {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
  }
  .navbar {
           background-color:rgb(212, 171, 118);
           height: 65px;
           color: cornsilk;
          }
          .op{
              background-color:rgb(212, 171, 118);
              height: 140px;
          }
          .opp{
              background-color:rgb(212, 171, 118);
              height: 500px;
          }
          
  </style>
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <nav class="navbar navbar-expand-sm  navbar-dark">
   
    <a class="navbar-brand" href="#">BUKUKU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
   
      <div class="container text-align"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-outline-light text-dark"><a href="index.html" class="btn " >Kembali ke Home</a></button>
      <button type="button"  class="btn btn-outline-light text-dark"><a href="pesantampil.php" class="btn " >Data Pemesanan</a></button>
      <button type="button"  class="btn btn-outline-light text-dark"><a href="adminya.php" class="btn " >Data message</a></button>
      <button type="button"  class="btn btn-outline-light text-dark"><a href="stoktampil.php" class="btn " >stok buku</a></button>
      <button type="button" class="btn btn-outline-light text-dark"><a href="akhir.php" class="btn " >LOGOUT</a></button> 
    </div>
    </div>  
  </nav>
  <div class="jumbotron text-center " style="margin-bottom:0">
  
  </div>
  
  <br>
  <br>
  
  
  
  
  
  
  
  <br><br><br>
  <br>
  <div class="container text-center">
    <h2>Admi BUKUKU STORE</h2>
    <span class="border border-primary"></span>
    <span class="border border-secondary"></span>
    <span class="border border-success"></span>
    <span class="border border-danger"></span>
    <span class="border border-warning"></span>
    <span class="border border-info"></span>
    <span class="border border-light"></span>
    <span class="border border-dark"></span>
    <span class="border border-primary"></span>
    <span class="border border-secondary"></span>
    <span class="border border-success"></span>
    <span class="border border-warning"></span>
  
  </div>
  <br><br>
  <br>

<br><br>
<br>
<br>
<br>


<br>
<br>
<div class="opp text-center " style="margin-bottom:0  ">
<br>
<div class="iya">


<center><h2> Detail Pemesanan </h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="white">nomer</th>
<th bgcolor="white">Nama</th>
<th bgcolor="white">email</th>
<th bgcolor="white">Alamat</th>
<th bgcolor="white">tanggal pemesanan</th>
<th bgcolor="white">tanggal buku datang</th>
<th bgcolor="white">tipe</th>
<th bgcolor="white">waktu masuk</th>
<th colspan="2" bgcolor="white">AKSI</th>
</tr>
<?php
include "adminyakoneksi.php";
$query = "SELECT * FROM goo";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array ($sql)){
  echo "<tr>";
  echo "<td>",$data ['nomerr']."</td>";
  echo "<td>",$data ['nama']."</td>";
  echo "<td>",$data ['emaill']."</td>";
  echo "<td>",$data ['alamat']."</td>";
  echo "<td>",$data ['tanggal_pesan']."</td>";
  echo "<td>",$data ['tanggal_datang']."</td>";
  echo "<td>",$data ['masuk']."</td>";
  echo "<td> <a href='indexupdateform.php?nomerr=".$data['nomerr']."'>EDIT</a></td>";
  echo "<td><a href='indexhapus.php?nomerr=".$data['nomerr']."'onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'>delete</a></td>";
  echo "</tr>";
}
?>


</div>
<br>
  </div>
</div>


</body>
</html>
