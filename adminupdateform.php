<?php
include 'adminkoneksi.php';
$nomer=$_GET['nomer'];

$query = "SELECT * FROM pesan WHERE nomer='$nomer'";
$result = mysqli_query($connect, $query);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/frameset.dtd">
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
          .pesan{
            margin: -50px 300px;
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
         
      <div class="container text-align">
        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-outline-light text-dark"><a href="pesantampil.php" class="btn " role="button">Kembali</a></button>
      
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
  <h2>Hallo Pengunjung BUKUKU STORE</h2>
  <h1>TABEL PEMESANAN:( </h1> 
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




    
    <div class="pesan">
    <form name="form1" action="adminupdate.php" method="POST" >
    <font  size="6"></font>
    <table border="2" cellspacing=0 cellpadding=5 >
    <colgroup align="center">
    <colgroup align="center">
    <colgroup align="center">
    <thead valign="middle">
    <tr>
   
    <tr>
    <td>Email<input  type="text"  name="emaill"  value="<?php echo $row['emaill'];?>"  /><td>
    </tr>
    <tr>
    <td>Alamat<input  type="text"  name="alamat"   value="<?php echo $row['alamat'];?>"/><td>
    </tr>
    <tr>
    <th width="55"><font color="black" size="4">No</font>
    <th width="400"><font color="black" size="4">buku</font>
    <th width="380"><font color="black" size="4">Harga Satuan</font>
    <th width="100"><font color="black" size="4">Pesan</font>
    </tr>
    <tbody>
    <tr>
    <td>1<td> BRINGING UP BEBE<td>@<input  type="text"    value="98000" /><td>
    <input  type="text"  name="o1"  value="<?php echo $row['o1'];?>" />
    </tr>
    <tr>
    <td>2<td>MOZAIK TERINDAH<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o2"  value="<?php echo $row['o2'];?>"/>
    </tr>
    <tr>
    <td>3<td>KAMU TERLALU BANYAK BERCANDA<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o3"  value="<?php echo $row['o3'];?>" />
    </tr>
    <tr>
    <td>4<td>GANJIL GENAP<td>@<input  type="text"   value="95000" disabled="true"/>
    <td><input  type="text"  name="o4"  value="<?php echo $row['o4'];?> " />
    </tr>
    <tr>
    <td>5<td>HABIBIE DAN SOEHARTO<td>@<input  type="text"   value="98000" disabled="true"/> <td>
    <input  type="text"  name="o5"  value="<?php echo $row['o5'];?> "/>
    </tr>
    <tr>
    <td>6<td>HEART SHAPED TEARS<td>@<input  type="text"   value="98000" disabled="true"/> <td>
    <input  type="text"  name="o6" value="<?php echo $row['o6'];?> " />
    </tr>
    <tr>
    <td>7<td>SENJA PAGI<td>@<input  type="text"   value="125000" disabled="true"/>
    <td><input  type="text"  name="o7" value="<?php echo $row['o7'];?> "  />
    </tr>
    <tr>
    <td>8<td>KATA<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o8" value="<?php echo $row['o8'];?> " />
    </tr>
    <br>
    <tr>
    <td>9<td> BAHAGIA MAKSIMAL DENGAN HIDUP MINIMAL<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o9" value="<?php echo $row['o9'];?> " />
    </tr>
    <tr>
    <td>10<td>AKU SEORANG INTROVER<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o10" value="<?php echo $row['o10'];?> "  />
    </tr>
    <tr>
    <td>11<td>ARE YOU THE ONE<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o11" value="<?php echo $row['o11'];?> " />
    </tr>
    <tr>
    <td>12<td>SENI HIDUP BAHAGIA DENGAN BERFIKIR POSITIF<td>@<input  type="text"   value="95000" disabled="true"/>
    <td><input  type="text"  name="o12" value="<?php echo $row['o12'];?> " />
    </tr>
    <tr>
    <td>13<td>BERANI RESIGN!<td>@<input  type="text"   value="98000" disabled="true"/> <td>
    <input  type="text"  name="o13" value="<?php echo $row['o13'];?> "/>
    </tr>
    <tr>
    <td>14<td>TERANG DIBENDERA NEGERI<td>@<input  type="text"   value="98000" disabled="true"/> <td>
    <input  type="text"  name="o14" value="<?php echo $row['o14'];?> "/>
    </tr>
    <tr>
    <td>15<td>HIPNOTIS UNUTK KEHIDUPAN SEHARI HARI<td>@<input  type="text"   value="125000" disabled="true"/>
    <td><input  type="text"  name="o15" value="<?php echo $row['o15'];?> " />
    </tr>
    <tr>
    <td>16<td>LIFE IN MY HAND<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o16" value="<?php echo $row['o16'];?> "/>
    </tr>
    <br>
    <tr>
    <td>17<td> ALLETA<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o17" value="<?php echo $row['o17'];?> "/>
    </tr>
    <tr>
    <td>18<td>ERENS PLAY<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o18" value="<?php echo $row['o18'];?> " />
    </tr>
    <tr>
    <td>19<td>MEMAHAMI UNTUK MEMANFAATKAN<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o19" value="<?php echo $row['o19'];?> "/>
    </tr>
    <br>
    <tr>
    <td>20<td>SURAT KOPI<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o20" value="<?php echo $row['o20'];?> "/>
    </tr>
    <tr>
    <td>21<td>MELINTASI BATAS<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o21" value="<?php echo $row['o21'];?> " />
    </tr>
    <tr>
    <td>22<td>TALIJIWO<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o22" value="<?php echo $row['o22'];?> "/>
    </tr>
    <tr>
    <td>23<td>PERBINCANGAN TERAKHIR<td>@<input  type="text"   value="95000" disabled="true"/>
    <td><input  type="text"  name="o23" value="<?php echo $row['o23'];?> " />
    </tr>
    <tr>
    <td>24<td>PEMETIK MIMPI<td>@<input  type="text"   value="98000" disabled="true"/> <td>
    <input  type="text"  name="o24" value="<?php echo $row['o24'];?> "/>
    </tr>
    <tr>
    <td>25<td>THE CHOISE WE MAKE<td>@<input  type="text"   value="98000" disabled="true"/> <td>
    <input  type="text"  name="o25" value="<?php echo $row['o25'];?> "/>
    </tr>
    <tr>
    <td>26<td> EASY GRAMMAR FOR BEGINNER<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o26" value="<?php echo $row['o26'];?> "/>
    </tr>
    <tr>
    <td>27<td>3 BHASA:KAMUS BERGAMBAR SUPER GENIUS<td>@<input  type="text"    value="98000" disabled="true"/><td>
    <input  type="text"  name="o27" value="<?php echo $row['o27'];?> " />
    </tr>
    <tr>
    <td>28<td>LETS SPEAK<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o28" value="<?php echo $row['o28'];?> "/>
    </tr>
    <tr>
    <td>29<td>SEMANTIK<td>@<input  type="text"   value="95000" disabled="true"/>
    <td><input  type="text"  name="o29" value="<?php echo $row['o29'];?> " />
    </tr>
    <br>
    <tr>
    <td>30<td> MESIN LISTRIK ARUS BOLAK BALIK<td>@<input  type="text"    value="110000" disabled="true"/><td>
    <input  type="text"  name="o30" value="<?php echo $row['o30'];?> "/>
    </tr>
    <tr>
    <td>31<td>TEKNOLOGI PERBAIKAN TANAH<td>@<input  type="text"    value="110000" disabled="true"/><td>
    <input  type="text"  name="o31" value="<?php echo $row['o31'];?> " />
    </tr>
    <tr>
    <td>32<td>SEMIKONDUKTOR<td>@<input  type="text"   value="111000" disabled="true"/> <td>
    <input  type="text"  name="o32" value="<?php echo $row['o32'];?> "/>
    </tr>
    <tr>
    <td>33<td>PEMROGRAMAN MATLAB<td>@<input  type="text"   value="111000" disabled="true"/>
    <td><input  type="text"  name="o33" value="<?php echo $row['o33'];?> " />
    </tr>
    <tr>
    <td>34<td>APLIKASI TEKNOLOGI KUANTUM<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o34"  value="<?php echo $row['o34'];?> "/>
    </tr>
    <tr>
    <td>35<td>SYNTESA POLY LACTID ACID<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o35" value="<?php echo $row['o35'];?> "/>
    </tr>
    <td>36<td>REKAYASA LALU LINTAS<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o36" value="<?php echo $row['o36'];?> "/>
    </tr>
    <tr>
    <td>37<td>KRETA CEPAT<td>@<input  type="text"   value="125000" disabled="true"/> <td>
    <input  type="text"  name="o37" value="<?php echo $row['o37'];?> "/>
    </tr>
    <br>

    </table>
   
    <td><input type="hidden" name="nomer" value="<?php echo $row['nomer'];?>"></td>
    <button type="submit" class="btn btn-primary" value="simpan"  >Submit</button>
  </form>
    </form>
    </div>
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