

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
        height: 650px;
        background-image: url(A.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    .jumbotronn{
        height: 550px;
        background-color:rgba(77, 73, 68, 0.178);
       
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
              height: 160px;
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
          <ul class="navbar-nav">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <font color="#FF FF FF"> Kategori Buku</font>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Novel</a>
                <a class="dropdown-item" href="#">Motifasi</a>
                <a class="dropdown-item" href="#">Majalah</a>
                <a class="dropdown-item" href="#">Pusi&Sastra</a>
                <a class="dropdown-item" href="#">Bahasa</a>
                <a class="dropdown-item" href="#">Sains&Teknik</a>
               </div>
              </li>       
        
             
            
      </ul>
      <div class="container text-align">
        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-outline-light text-dark"><a href="index.html" class="btn " >Kembali ke Home</a></button>
       
       </div>
    </div>  
  </nav>
<div class="jumbotron text-center " style="margin-bottom:0">
  
</div>

<br>
<br>







<br><br>
<br>
<div class="container text-center">
  <h2>Admin BUKUKU STORE</h2>
  <h1>UPDATE DATA</h1> 
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



 <div class="container">
  
  <div class="alert alert-primary text-center">
  <?php
include 'adminkoneksi.php';
$nomer = $_POST["nomer"];
$emaill=$_POST["emaill"];
$alamat = $_POST["alamat"];
$o1 = $_POST["o1"];
$o2 = $_POST["o2"];
$o3 = $_POST["o3"];
$o4 = $_POST["o4"];
$o5 = $_POST["o5"];
$o6 = $_POST["o6"];
$o7 = $_POST["o7"];
$o8 = $_POST["o8"];
$o9 = $_POST["o9"];
$o10 = $_POST["o10"];
$o11 = $_POST["o11"];
$o12 = $_POST["o12"];
$o13 = $_POST["o13"];
$o14 = $_POST["o14"];
$o15 = $_POST["o15"];
$o16 = $_POST["o16"];
$o17 = $_POST["o17"];
$o18 = $_POST["o18"];
$o19 = $_POST["o19"];
$o20 = $_POST["o20"];
$o21 = $_POST["o21"];
$o22 = $_POST["o22"];
$o23 = $_POST["o23"];
$o24 = $_POST["o24"];
$o25 = $_POST["o25"];
$o26 = $_POST["o26"];
$o27 = $_POST["o27"];
$o28 = $_POST["o28"];
$o29 = $_POST["o29"];
$o30 = $_POST["o30"];
$o31 = $_POST["o31"];
$o32 = $_POST["o32"];
$o33 = $_POST["o33"];
$o34 = $_POST["o34"];
$o35 = $_POST["o35"];
$o36 = $_POST["o36"];
$o37 = $_POST["o37"];



$query = "UPDATE pesan SET  emaill='$emaill', alamat='$alamat',o1='$o1',o2='$o2',o3='$o3',o4='$o4',o5='$o5',o6='$o6',o7='$o7',o8='$o8',o9='$o9',o10='$o10',o11='$o11',o12='$o12',o13='$o13',o14='$o14',o15='$o15',o16='$o16',o17='$o17',o18='$o18',o19='$o19',o20='$o20',o21='$o21',o22='$o22',o23='$o23',o24='$o24',o25='$o25',o26='$o26',o27='$o27',o28='$o28',o29='$o29',o30='$o30',o31='$o31',o32='$o32',o33='$o33',o34='$o34',o35='$o35',o36='$o36',o37='$o37' WHERE nomer='$nomer'";
$result =  $connect ->query($query);
$num = mysqli_affected_rows($connect);

 if($num > 0){ 
     echo " BERHASIL UPDATE DATA <br>";
    
 }else{
     echo "gagal update <br>";
 }
 echo "<a href='pesantampil.php'>lihat data</a>";
 
?>

  </div>
</div>
</div>
 <br>
 <br>
 <br>
 <br>
<br>
<br>
<br>
<br>
<div class="opp text-center " style="margin-bottom:0  ">
    <br>
    <h6><font color="#FFFFFF">referensi gambar dari GOOGLE</font></h6>
  <br>
  <h5><font color="#FFFFFF"> Kebijakan Privasi  |   Syarat dan Ketentuan  |   Peta Situs
    </font></h3>
  <h7><font color="#FFFFFF"> Copyright © 2008-2020 Bukukustore.com. All rights reserved</font></h7>
  <br>
  
  </div>
</div>

</body>
</html>