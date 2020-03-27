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
   
      <div class="container text-align"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-outline-light text-dark"><a href="index.html" class="btn " >Kembali ke Home</a></button>
        <button type="button"  class="btn btn-outline-light text-dark"><a href="pesantampil.php" class="btn " >Data Pemesanan</a></button>
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
  <h1>DATA PEMESANAN</h1> 
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
<th bgcolor="brown">id</th>
<th bgcolor="brown">Nama</th>
<th bgcolor="brown">email</th>
<th bgcolor="brown">Alamat</th>
<th bgcolor="brown">order1</th>
<th bgcolor="brown">order2</th>
<th bgcolor="brown">order3</th>
<th bgcolor="brown">order4</th>
<th bgcolor="brown">order5</th>
<th bgcolor="brown">order6</th>
<th bgcolor="brown">order7</th>
<th bgcolor="brown">order8</th>
<th bgcolor="brown">order9</th>
<th bgcolor="brown">order10</th>
<th bgcolor="brown">order11</th>
<th bgcolor="brown">order12</th>
<th bgcolor="brown">order13</th>
<th bgcolor="brown">order14</th>
<th bgcolor="brown">order15</th>
<th bgcolor="brown">order16</th>
<th bgcolor="brown">order17</th>
<th bgcolor="brown">order18</th>
<th bgcolor="brown">order19</th>
<th bgcolor="brown">order20</th>
<th bgcolor="brown">order21</th>
<th bgcolor="brown">order22</th>
<th bgcolor="brown">order23</th>
<th bgcolor="brown">order24</th>
<th bgcolor="brown">order25</th>
<th bgcolor="brown">order26</th>
<th bgcolor="brown">order27</th>
<th bgcolor="brown">order28</th>
<th bgcolor="brown">order29</th>
<th bgcolor="brown">order30</th>
<th bgcolor="brown">order31</th>
<th bgcolor="brown">order32</th>
<th bgcolor="brown">order33</th>
<th bgcolor="brown">order34</th>
<th bgcolor="brown">order35</th>
<th bgcolor="brown">order36</th>
<th bgcolor="brown">order37</th>
<th colspan="2" bgcolor="brown">AKSI</th>
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
  echo "<td> <a href='adminupdate.php?nomer=".$data['nomer']."'>EDIT</a></td>";
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
