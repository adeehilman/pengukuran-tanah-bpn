<?php

session_start();

include ('config.php');

$username =$_POST['username'];
$password =$_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM tb_users WHERE username='$username' AND password='$password'");


/*
if(mysqli_num_rows($query)==1){
	header('location:../app');
}

else{
	header('location:../');
}
*/

$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 	
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 			
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['level'] = $data['level'];
		$nama = mysqli_fetch_array($login);
		// alihkan ke halaman dashboard admin
		header("location:../app"); 
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="pengguna"){
		// buat session login dan username
		$_SESSION['id_users'] = $data['id_users'];
		$_SESSION['username'] = $username;
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['level'] = "pengguna";
		// alihkan ke halaman dashboard pegawai
		header("location:../app");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="pengurus"){
		// buat session login dan username
		$_SESSION['id_users'] = $data['id_users'];
		$_SESSION['username'] = $username;
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:../app");
 
	}else if($data['level']=="panitia"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['nama_user'] = $data['nama_user'];
		$_SESSION['level'] = "panitia";
		// alihkan ke halaman dashboard Panita
		header("location:../app");
 
	}
	else{
 		
		header("location:../index.php?error=1");
	}	
}else{
	header("location:../index.php?error=1");
}




?>