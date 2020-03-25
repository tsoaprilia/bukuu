<?php
include './adminkoneksi.php';
$fname = $_POST["fname"];
$emaill = $_POST["emaill"];
$subject = $_POST["subject"];

$query = "INSERT INTO contact ( fname, emaill, subject )
          VALUES ('$fname','$emaill','$subject')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:index.html");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>