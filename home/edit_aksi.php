<?php
include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

mysqli_query($koneksi, "UPDATE `tb_login` SET `username` = '$username', `level` = '$level' WHERE `tb_login`.`id` = $id_user;");
header("location:index.php");
