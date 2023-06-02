<?php 
include('../../conf/config.php');


$nama = $_POST['nama'];
$nik = $_POST['nik'];
$nope = $_POST['nope'];
$alamat = $_POST['alamat'];
$divisi = $_POST['divisi'];
$user = rand(1, 255);
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"INSERT INTO tb_petugas VALUES ('','$nama','$nik','$nope','$alamat','on','$divisi','$user')");
header('location: ../index.php?page=datakaryawan');

$query .= mysqli_query($koneksi,"INSERT INTO tb_users VALUES ('$user','$nama','$username','$password','$divisi',)");
?>