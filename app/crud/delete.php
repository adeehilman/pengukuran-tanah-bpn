<?php 
session_start();
include('../../conf/config.php');

$id = $_GET['id'];


$query = mysqli_query($koneksi,"DELETE FROM tb_permohonan WHERE idPermohonan ='$id'");



if($_SESSION['level']== "admin"){
	header('location: ../index.php?page=data_pengguna_adm');
}else{
	header('location: ../index.php?page=data_pengguna');
}
?>