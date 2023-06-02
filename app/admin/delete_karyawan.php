
<?php 
session_start();
include('../../conf/config.php');

$id = $_GET['id'];


$query = mysqli_query($koneksi,"DELETE FROM tb_petugas WHERE idPetugas ='$id'");



if($_SESSION['level']== "4"){
	header('location: ../index.php?page=data_pengguna_adm');
}else{
	header('location: ../index.php?page=data_pengguna');
}
?>