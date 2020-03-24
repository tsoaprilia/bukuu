<?php
include 'adminkoneksi.php';

$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['passwordd'];

$data= mysqli_query($connect, "SELECT * FROM admin WHERE username='$username'  and email='$email' ");
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status']="login";
    header("location:adminya.php");

}else{
    header("location:index.php?pesan=gagal");
}
?>