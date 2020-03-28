<?php
include 'adminkoneksi.php';
$nama = $_POST["nama"];
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



$query = "INSERT INTO pesan ( nama, emaill, alamat, o1, o2, o3, o4,o5,o6,o7,o8,o9,o10,o11,o12,o13,o14,o15,o16,o17,o18,o19,o20,o21,o22,o23,o24,o25,o26,o27,o28,o29,o30,o31,o32,o33,o34,o35,o36,o37)
          VALUES ('$nama','$emaill','$alamat','$o1','$o2','$o3','$o4','$o5','$o6','$o7','$o8','$o9','$o10','$o11','$o12','$o13','$o14','$o15','$o16','$o17','$o18','$o19','$o20','$o21','$o22','$o23','$o24','$o25','$O26','$o27','$o28','$o29','$o30','$o31','$o32','$o33','$o34','$o35','$o36','$o37')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:sudahpesan.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>