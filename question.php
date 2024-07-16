<?php
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

mysqli_query($koneksi, "INSERT INTO contactus (name, email, phone, msg) values ('$name', '$email', '$phone', '$msg')");
header("location:../porto/#contact");
?>