<?php
session_start();
unset($_SESSION['nama_user']);
unset($_SESSION['level']);
header('location:../');
?>