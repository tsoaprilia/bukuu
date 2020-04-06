<?php
include './adminkoneksi.php';
$judul = $_POST["judul"];
$harga = $_POST["harga"];
$jumlah = $_POST["jumlah"];
$query = "INSERT INTO stok ( judul, harga, jumlah )
          VALUES ('$judul','$harga','$jumlah')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:stoktampil.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>