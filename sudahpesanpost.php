<?php
include 'adminkoneksi.php';
$nama = $_POST["nama"];
$emaill=$_POST["emaill"];
$alamat = $_POST["alamat"];
$a1 = $_POST["tanggal_pesan"];
$a2 = $_POST["tanggal_datang"];
$tipe = $_POST["tipe"];


$query = "INSERT INTO goo ( nama, emaill, alamat, tanggal_pesan, tanggal_datang, tipe)
          VALUES ('$nama','$emaill','$alamat','$a1', '$a2', '$tipe')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:seles.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>