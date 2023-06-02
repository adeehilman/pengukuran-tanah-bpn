<?php 
$id_users = $_SESSION['id_users'];

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
                <h3 class="card-title" class="font-weight-bold">Form Pendaftaran Pengajuan Pengukuran</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="crud/tambah_data.php ">
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputNama">Nama Lengkap</label>
                    <input class="form-control" id="exampleInputName"  value="<?php echo $id_users ?> " name="id_user" hidden>
                    <input class="form-control" id="exampleInputName" placeholder="Masukkan nama lengkap anda" name="nama" required>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input class="form-control" id="exampleInputNik" placeholder="Masukkan NIK Anda" name="nik" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat Email Anda" name="email" required>
                  </div>
                   <!-- phone mask -->
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <div class="input-group">
                        <input type="phone" class="form-control"
                        placeholder="Masukkan No. Hp Anda" name="nope" required>
                      </div>
                    </div>
                    <!-- /.form group -->  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInput" >Provinsi</label>

                        <select class="form-control select" style="width: 100%;" name="provinsi">
                          <option selected="selected" >Kepulauan Riau</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kelurahan</label>

                        <select class="form-control select" style="width: 100%;" name="kelurahan">
                          <option selected="selected">Sungai Harapan</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                      
                     
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <div class="form-group">
                         <label for="exampleInputEmail1">Kota</label>
                        <select class="form-control select" style="width: 100%;" name="kota">
                          <option selected="selected">Batam</option>
                          <option>Jakarta</option>
                          <option>Makasar</option>
                          <option>Jambi</option>
                          <option>Palembang</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kode POS</label>

                        <select class="form-control select" style="width: 100%;">
                          <option selected="selected">29484</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>       
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                         <label for="exampleInputEmail1">Kecamatan</label>
                        <select class="form-control select" style="width: 100%;"name="kecamatan">
                          <option selected="selected">Sekupang</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Jln/Perumahan</label>
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Alamat Lengkap Anda" name="alamat" required>
                  </div>        
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                   <div class="form-group">
                    <label for="exampleInputLokasi">Lokasi Tanah</label>
                    <textarea class="form-control" id="exampleInputLokasi" placeholder="Masukkan Lokasi Tanah" name="lks_tanah" required></textarea>
                 <div class="form-group">
                    <label for="exampleInputFile">Bukti Kepemilikan</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="bukti" required>
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran Tanah</label>
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Ukuran Tanah" name="ukuran_tnh" required>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputLokasi">Titik Koordinat</label>
                    <textarea class="form-control" data-inputmask="'mask': ['9.999999,999.999999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask placeholder="Masukkan Titik Koordinat" name="titik_koordinat" required></textarea>
                  </div>
                  <input class="form-control" id="exampleInputName"  value="<?php echo $id_users ?> " name="id_user" hidden>


                  <button type="submit" class="btn btn-primary">Simpan</button>
                
                </div>  
                </div>
                 
              </form>
        
         
 
            


            </div>
          </div>
        </div>

</section>









