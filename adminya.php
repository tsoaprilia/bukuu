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
        height: 600px;
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
   
      <div class="container text-align">    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-outline-light text-dark"><a href="index.html" class="btn " >Kembali ke Home</a></button>
      <button type="button"  class="btn btn-outline-light text-dark"><a href="stoktampil.php" class="btn " >stok buku</a></button>
        <button type="button"  class="btn btn-outline-light text-dark"><a href="pesantampil.php" class="btn " >Data Pemesanan</a></button>
        <button type="button" class="btn btn-outline-light text-dark"><a href="adminya1.php" class="btn " >detail pemesanan</a></button>
        <button type="button" class="btn btn-outline-light text-dark"><a href="daftar.php" class="btn " >Buku Sudah diantar</a></button>
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
  <h2>Message Posts from Visitors</h2>
  <h1>RESPONE PLEASE!</h1> 
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
<br>
<br>
<br>
<br>
<div class="opp text-center " style="margin-bottom:0  ">
<br>
<div class="iya">


<center><h2> Message </h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="white">id</th>
<th bgcolor="white">username</th>
<th bgcolor="white">email</th>
<th bgcolor="white">message</th>
<th bgcolor="white">time</th>
<th bgcolor="white">DELETE</th>
</tr>
<?php
include "adminyakoneksi.php";
$query = "SELECT * FROM contact";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array ($sql)){
  echo "<tr>";
  echo "<td>",$data ['id']."</td>";
  echo "<td>",$data ['fname']."</td>";
  echo "<td>",$data ['emaill']."</td>";
  echo "<td>",$data ['subject']."</td>";
  echo "<td>",$data ['time']."</td>";
  echo "<td><a href='admincontacthapus.php?id=".$data['id']."'onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'>delete</a></td>";
  echo "</tr>";
}
?>


</div>
<br>

<br>
  </div>
</div>

</body> 

</html>
