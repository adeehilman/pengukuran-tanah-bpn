<?php 
include('../../conf/config.php');

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nib = $_POST['nib'];
$luas_tnh = $_POST['luas_tnh'];
$keadaan_tnh = $_POST['keadaan_tnh'];
$penggunaan = $_POST['penggunaan'];



$query = mysqli_query($koneksi,"INSERT INTO hasil_ukur VALUES ('$id','$tanggal','$nib','$luas_tnh','$keadaan_tnh','$penggunaan')");
header('location: ../index.php?page=asg_pengurus'); 
?>