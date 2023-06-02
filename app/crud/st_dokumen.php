<?php 

include('../../conf/config.php');

$id = $_POST['id'];

$status= $_POST['status'];



$query = mysqli_query($koneksi, "UPDATE tb_dokumen SET id_dok='$id',status_sk='$status' WHERE id_dok = '$id'");
header('location: ../index.php?page=asg_dokumen');

?>