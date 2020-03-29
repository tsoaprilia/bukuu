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
        margin-top: -390px;
        width:2700px;
        height: 750px;
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
           width:2700px;
           color: cornsilk;
          }
          .op{
              background-color:rgb(212, 171, 118);
              height: 140px;
          }
          .opp{
              width:2700px;
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
   
      <div class="container text-align">  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-outline-light text-dark"><a href="index.html" class="btn " >Kembali ke Home</a></button>
        <button type="button"  class="btn btn-outline-light text-dark"><a href="adminya1.php" class="btn " >Detail Pemesanan</a></button>
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
  <h2>Selamat datang ADMIN</h2>
  <h1>data pemesanan</h1> 
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
<div class="opp text-center " style="margin-bottom:0  ">
<br>
<div class="iya">


<center><h2> Message </h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="white">id</th>
<th bgcolor="white">Nama</th>
<th bgcolor="white">email</th>
<th bgcolor="white">Alamat</th>
<th bgcolor="white">order1</th>
<th bgcolor="white">order2</th>
<th bgcolor="white">order3</th>
<th bgcolor="white">order4</th>
<th bgcolor="white">order5</th>
<th bgcolor="white">order6</th>
<th bgcolor="white">order7</th>
<th bgcolor="white">order8</th>
<th bgcolor="white">order9</th>
<th bgcolor="white">order10</th>
<th bgcolor="white">order11</th>
<th bgcolor="white">order12</th>
<th bgcolor="white">order13</th>
<th bgcolor="white">order14</th>
<th bgcolor="white">order15</th>
<th bgcolor="white">order16</th>
<th bgcolor="white">order17</th>
<th bgcolor="white">order18</th>
<th bgcolor="white">order19</th>
<th bgcolor="white">order20</th>
<th bgcolor="white">order21</th>
<th bgcolor="white">order22</th>
<th bgcolor="white">order23</th>
<th bgcolor="white">order24</th>
<th bgcolor="white">order25</th>
<th bgcolor="white">order26</th>
<th bgcolor="white">order27</th>
<th bgcolor="white">order28</th>
<th bgcolor="white">order29</th>
<th bgcolor="white">order30</th>
<th bgcolor="white">order31</th>
<th bgcolor="white">order32</th>
<th bgcolor="white">order33</th>
<th bgcolor="white">order34</th>
<th bgcolor="white">order35</th>
<th bgcolor="white">order36</th>
<th bgcolor="white">order37</th>
<th colspan="2" bgcolor="white">AKSI</th>
</tr>
<?php
include "adminyakoneksi.php";
$query = "SELECT * FROM pesan";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array ($sql)){
  echo "<tr>";
  echo "<td>",$data ['nomer']."</td>";
  echo "<td>",$data ['nama']."</td>";
  echo "<td>",$data ['emaill']."</td>";
  echo "<td>",$data ['alamat']."</td>";
  echo "<td>",$data ['o1']."</td>";
  echo "<td>",$data ['o2']."</td>";
  echo "<td>",$data ['o3']."</td>";
  echo "<td>",$data ['o4']."</td>";
  echo "<td>",$data ['o5']."</td>";
  echo "<td>",$data ['o6']."</td>";
  echo "<td>",$data ['o7']."</td>";
  echo "<td>",$data ['o8']."</td>";
  echo "<td>",$data ['o9']."</td>";
  echo "<td>",$data ['o10']."</td>";
  echo "<td>",$data ['o11']."</td>";
  echo "<td>",$data ['o12']."</td>";
  echo "<td>",$data ['o13']."</td>";
  echo "<td>",$data ['o14']."</td>";
  echo "<td>",$data ['o15']."</td>";
  echo "<td>",$data ['o16']."</td>";
  echo "<td>",$data ['o17']."</td>";
  echo "<td>",$data ['o18']."</td>";
  echo "<td>",$data ['o19']."</td>";
  echo "<td>",$data ['o20']."</td>";
  echo "<td>",$data ['o21']."</td>";
  echo "<td>",$data ['o22']."</td>";
  echo "<td>",$data ['o23']."</td>";
  echo "<td>",$data ['o24']."</td>";
  echo "<td>",$data ['o25']."</td>";
  echo "<td>",$data ['o26']."</td>";
  echo "<td>",$data ['o27']."</td>";
  echo "<td>",$data ['o28']."</td>";
  echo "<td>",$data ['o29']."</td>";
  echo "<td>",$data ['o30']."</td>";
  echo "<td>",$data ['o31']."</td>";
  echo "<td>",$data ['o32']."</td>";
  echo "<td>",$data ['o33']."</td>";
  echo "<td>",$data ['o34']."</td>";
  echo "<td>",$data ['o35']."</td>";
  echo "<td>",$data ['o36']."</td>";
  echo "<td>",$data ['o37']."</td>";
  echo "<td> <a href='adminupdateform.php?nomer=".$data['nomer']."'>EDIT</a></td>";
  echo "<td><a href='adminpesenhapus.php?nomer=".$data['nomer']."'onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'>delete</a></td>";
  echo "</tr>";
}
?>


</div>
<br>


  
  </div>
</div>


</body>
</html>
