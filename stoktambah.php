<?php
include 'adminkoneksi.php';
$sql =null;
if(isset($_GET["kurang"])){
    $sql = "update books  set stok= jumlah+p1 where id = ". $_GET['kurang'].";";
}
if($sql){
$result = mysqli_query($db,$sql;)
}
header("location:sudahpesan.php");        
?>