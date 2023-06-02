 <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/profil1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama_user'].' - '.$_SESSION['level'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>


      <!-- /.sidebar-menu -->
      <?php 
      if($_SESSION['level'] == 'admin'){
        include('menu/admin.php'); 
      }
      else if($_SESSION['level']== 'pengguna'){
        include('menu/pengguna.php');
      }
      else if($_SESSION['level']== 'panitia'){
        include('pengurus/panitia.php');
      }
      else if($_SESSION['level']== 'pengurus'){
        include('pengurus/pengurus.php');
      }


        ?>  
      
      
      
    </div>