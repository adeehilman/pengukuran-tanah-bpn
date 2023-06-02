<?php 
session_start();
include('../../conf/config.php');
$id = $_POST['id'];
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
$status = $_POST['status'];
$petugas = $_POST['petugas'];




$query = mysqli_query($koneksi,"UPDATE tb_permohonan SET nama='$nama',nik='$nik',email='$email', no_telp ='$nope', alamat ='$prov, $kota, $kec, $kel, $alamat', lokasi_tnh='$tanah', bukti_milik='$bukti', ukuran_tnh='$ukuran', titik_koordinat='$koordinat',idStatus='$status', idPetugas ='$petugas' WHERE idPermohonan ='$id'");



if($_SESSION['level']== "admin"){
	header('location: ../index.php?page=data_pengguna_adm');
	
}else if($_SESSION['level']== "pengurus"){
	header('location: ../index.php?page=asg_pengurus');
}
else{
	header('location: ../index.php?page=data_pengguna');
}
?>