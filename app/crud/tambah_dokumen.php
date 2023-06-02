<?php 

include('../../conf/config.php');

$id = $_POST['id'];
$dok1 = $_POST['dok1'];
$dok2 = $_POST['dok2'];
$dok3 = $_POST['dok3'];



$query = mysqli_query($koneksi,"INSERT INTO tb_dokumen VALUES ('$id','$dok1','dok2','$dok3','0')");
header('location: ../index.php?page=upload_berkas');

?>