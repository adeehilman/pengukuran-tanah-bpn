<?php 

include('../../conf/config.php');

$nama = $_POST['nama'];
$username = $_POST['user'];
$password = $_POST['pass'];
$id = rand(1,255);


$query = mysqli_query($koneksi,"INSERT INTO tb_users VALUES ('$id','$nama','$username','$password','pengguna')");
header('location: ../../index.php');
?>