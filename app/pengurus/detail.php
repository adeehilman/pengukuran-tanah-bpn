<?php

include 'koneksi.php';
$id = json_encode($_POST['id']);
$c = mysqli_query("SELECT * FROM hasil_ukur WHERE idHasil".$id);
$d = mysqli_fetch_array($c);

?>

Nama: <?php echo $d['tgl_pengukuran']?><hr>
NIB: <?php echo $d['nib']?><hr>
Luas Tanah: <?php echo $d['luas_tnh']?><hr>
Keadaan Tanah: <?php echo $d['keadaan_tnh']?><hr>
Penggunaan: <?php echo $d['penggunaan']?><hr>