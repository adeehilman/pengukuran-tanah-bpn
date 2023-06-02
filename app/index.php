<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama_user']){
  header('Location:../index.php?session=expired');
}
include('header.php'); 
?>

<?php include('../conf/config.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <?php include('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
     
      <a href="index.php?page=dashboard" class="brand-link">
      
       <div class="row">
      <div class="col-sm-3">
      <img src="dist/img/bpn.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="align-content: center;"></div>
       <div class="col-sm-3">
      <span class="brand-text font-weight-bold">Badan Pertanahan <br> Nasional</span>

      </div>
    </div>
    </a>

   

      <!-- Sidebar Menu -->
      <?php include('sidebar.php') ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>

          </div><!-- /.col -->
        </div><!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
      if($_GET['page']=='dashboard'){
        include('dashboard.php');  
      }
      else if($_GET['page']=='form'){
        include ('menu/form.php');
      }
      else if($_GET['page']=='data_pengguna'){
        include ('data_pengguna.php');
      }
      else if($_GET['page']=='data_pengguna_adm'){
        include ('admin/data_pengguna_admin.php');
      }
      else if($_GET['page']=='edit_adm'){
        include ('admin/edit_admin.php');
      }
      else if($_GET['page']=='datakaryawan'){
        include ('menu/data_karyawan.php');
      }
      else if($_GET['page']=='upload_berkas'){
        include ('menu/upload_sk.php');
      }

      else if($_GET['page']=='edit'){
        include ('crud/edit.php');
      }
      else if($_GET['page']=='edit_krywn'){
        include ('admin/edit_karyawan.php');
      }
      else if($_GET['page']=='asg_pengurus'){
        include ('pengurus/asg_pengguna.php');
      }
      else if($_GET['page']=='edit_hasilukur'){
        include ('pengurus/edit_hasilukur.php');
      }
       else if($_GET['page']=='terbit'){
        include ('menu/terbit.html');
      }
      else if($_GET['page']=='asg_panitia'){
        include ('pengurus/asg_panitia.php');
      }
      else if($_GET['page']=='asg_dokumen'){
        include ('pengurus/asg_dokumen.php');
      }

    }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php') ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>
