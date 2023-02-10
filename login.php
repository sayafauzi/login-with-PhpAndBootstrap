<?php
session_start();
include 'koneksi.php';

$data_username = $_POST['name_pemakai'];
$data_password = md5($_POST['password_pemakai']);
/*$data = mysqli_query($koneksi, "SELECT * FROM table_user WHERE username='$data_username' AND password='$data_password'");
$cek_data = mysqli_num_rows($data);*/

$statement = $koneksi->prepare('SELECT * FROM tb_login WHERE username=? AND password=?');
$statement->bind_param('ss', $data_username, $data_password);
$statement->execute();
$statement->store_result();

$cek = $statement->num_rows();


if ($cek > 0) {
    $_SESSION['username'] = $data_username;
    $_SESSION['status'] = 'login';
    header("location:home/index.php");
} else {
    /*echo $cek . ' ' . $username  . ' ' . $password;*/
    header("location:index.php?pesan=gagal");
}
