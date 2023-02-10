<?php
include '../koneksi.php';

$username = $_POST['username'];
$level = $_POST['level'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "INSERT INTO `tb_login` 
(`id`, `username`, `password`, `level`) 
VALUES ('','$username', '$password', '$level')");
header("location:index.php");
