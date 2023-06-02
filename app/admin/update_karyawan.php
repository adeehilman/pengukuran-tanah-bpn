<?php 
session_start();
include('../../conf/config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$nope = $_POST['nope'];
$alamat = $_POST['alamat'];
$divisi = $_POST['divisi'];
$job = $_POST['job'];


$query = mysqli_query($koneksi,"UPDATE tb_petugas SET nama_petugas='$nama',nik='$nik', no_telp ='$nope', alamat_ptg ='$alamat;', job='$job', idDivisi='$divisi' WHERE idPetugas ='$id'");
header('location: ../index.php?page=datakaryawan');

?>