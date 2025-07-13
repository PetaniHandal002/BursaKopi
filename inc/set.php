<?php
include "konek.php";
koneksi_buka();

$id='1';
$con = mysqli_connect($DB_host,$DB_User,$DB_Pswd,$DB_Nama);
$ndy=mysqli_fetch_array(mysqli_query($con, "select * from profil where id='$id'"));

$founder=$ndy[1];
$course=$ndy[2];
$alamat=$ndy[3];
$no_telp=$ndy[4];
$email=$ndy[5];