<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_item");

// Periksa Koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
