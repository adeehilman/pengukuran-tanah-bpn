<?php 

$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_permohonan WHERE idHasil='$id'");
$view = mysqli_fetch_array($query);
?>   

             <!-- -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" class="font-weight-bold">Hasil Ukur</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="pengurus/hasil_ukur.php ">
                <div class="card-body">
                  <div class="form-group">

                    <div class="form-group">
                  <label>Tanggal Pengukuran</label>
                    <div class="input-group date" id="reservationdate"  data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggal" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                    <input class="form-control" id="exampleInputName"  value="<?php echo $view['idHasil'];?>" name="id" hidden>
                    <label for="exampleInputNama">Nib</label>
                    <input class="form-control" id="exampleInputName"  name="nib" hidden>
                    <input class="form-control" id="exampleInputName" placeholder="Masukkan NIB" name="nib"s>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Luas Tanah</label>
                    <input class="form-control" id="exampleInputNik" placeholder="Masukkan NIK Anda" name="luas_tnh">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Keadaan Tanah</label>
                    <input class="form-control" id="exampleInputEmail1" placeholder="Masukkan keadaan tanah" name="keadaan_tnh">
                  </div>
                   <!-- phone mask -->
                    <div class="form-group">
                      <label>Penggunaan</label>
                      <div class="input-group">
                        <input type="text" class="form-control"
                        name="penggunaan">
                      </div>
                    </div>
                    <!-- /.form group -->  
                 
                  <!-- /.row -->
                   <div class="form-group">
                    <label for="exampleInputLokasi">Tambahan</label>
                    <textarea class="form-control" id="exampleInputLokasi"></textarea>
                  


                  <button type="submit" class="btn btn-primary">Simpan</button>
                
                </div>  
                </div>
                 
              </form>
        
         
 
            


            </div>
          </div>
        </div>

</section>









