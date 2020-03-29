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
          .detail{
            margin: 0px 600px;
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
  <h2>PENGUNJUNG BUKUKU STORE</h2>
  <h1>DETAIL PEMESANAN</h1> 
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
<div class="alert alert-warning">
    <strong>Help!</strong> Untuk tanggal datang yang dimaksud adalah barang yang anda pesan sampai ditangan anda.
  </div>
  <div class="alert alert-secondary">
    <strong>Help!</strong> Untuk luar daerah Malang minimal 4 hari .
  </div>
  <div class="alert alert-dark">
    <strong>Help!</strong> Untuk daerah malang Minimal 2 hari.
  </div>
  <div class="alert alert-dark">
    <strong>Help!</strong> Untuk daerah Jawa Timur Minimal 7 hari.
  </div>
</div>
<div class="detail">
<form name="form1" action="sudahpesanpost.php" method="POST">
<table border="2" cellspacing=0 cellpadding=5 >
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4"></font>
<th width="200"><font color="black" size="4"></font>
<th width="180"><font color="black" size="4"></font>
<th width="100"><font color="black" size="4"></font>
</tr>
<tbody>

<tr>
<td colspan=3 align="right">nama<td><input  type="text"  name="nama"  />
</tr>
<tr>
<td colspan=3 align="right">email<td><input  type="text"  name="emaill"  />
</tr>
<tr>
<td colspan=3 align="right">detail alamat<td><input  type="text"  name="alamat"  />
</tr>
<tr>
<td colspan=3 align="right">tanggal pesan<td><input  type="text"  name="tanggal_pesan"  />
</tr>
<tr>
<td colspan=3 align="right">tanggal datang<td><input  type="text"  name="tanggal_datang" />
</tr>
<tr>
<td colspan=3 align="right">tipe pembayaran<td> <select id="tipe" name="tipe">
<option value="langsung">Langsung</option>
<option value="transfer">Transfer</option>
</select>
</tr>
</table>
<br/>
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button type="submit" class="btn btn-primary">Submit</button>
</form>
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
