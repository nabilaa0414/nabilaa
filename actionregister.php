<?php
include ("koneksi.php");


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$result = mysqli_query($conn,"INSERT INTO users VALUES (null,'$username','$email','$password')");

if ($result)
{
  	header('location:login.php');
}
else
{
  echo "gagal register";
}
?>