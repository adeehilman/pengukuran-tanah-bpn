<?php 
session_start();
include('../../conf/config.php');


$nama = $_POST['nama'];
$nik = $_POST['nik'];
$email = $_POST['email'];
$nope = $_POST['nope'];
$prov = $_POST['provinsi'];
$kota = $_POST['kota'];
$kec = $_POST['kecamatan'];
$kel = $_POST['kelurahan'];
$alamat = $_POST['alamat'];
$tanah = $_POST['lks_tanah'];
$ukuran = $_POST['ukuran_tnh'];
$bukti = $_POST['bukti'];
$koordinat = $_POST['titik_koordinat'];
$id = $_POST['id_user'];
$hasil = rand(1, 255);
$dok = rand(1, 255);

$query = mysqli_query($koneksi,"INSERT INTO tb_permohonan VALUES ('','$nama','$nik','$email','$nope','$prov, $kota, $kec, $kel, $alamat','$tanah','$bukti','$ukuran','$koordinat','off','0','$id','$hasil','$dok')");
/*
$query .= mysqli_query($koneksi, "INSERT INTO hasil_ukur VALUES ('$hasil','','','','','')");
*/
header('location: ../index.php?page=data_pengguna');


?>