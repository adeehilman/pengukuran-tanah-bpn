<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_permohonan WHERE idPermohonan='$id'");
$kueri = mysqli_query($koneksi,"SELECT * FROM tb_petugas WHERE idDivisi ='1' AND job ='on' ORDER BY rand() LIMIT 1");
$view = mysqli_fetch_array($query);
$tampil = mysqli_fetch_assoc($kueri);
?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Permohonan</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="crud/update.php ">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Nama Lengkap</label>
                    <input class="form-control" id="exampleInputName" placeholder="Masukkan nama lengkap anda" value="<?php echo $view['nama'];?>" name="nama">
                    <input class="form-control" id="exampleInputName" placeholder="Masukkan nama lengkap anda" value="<?php echo $view['idPermohonan'];?>" name="id" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input class="form-control" id="exampleInputNik" placeholder="Masukkan NIK Anda" value="<?php echo $view['nik'];?>" name="nik">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat Email Anda" value="<?php echo $view['email'];?>" name="email">
                  </div>
                   <!-- phone mask -->
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <div class="input-group">
                        <input type="text" class="form-control"
                        data-inputmask="'mask': ['9999-9999-9999 [x99999]', '+0999 9999 99[9]-9999']" data-mask placeholder="Masukkan No. Hp Anda" value="<?php echo $view['no_telp'];?>" name="nope">
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
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kode POS</label>

                        <select class="form-control select2" style="width: 100%;">
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
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Ulang Alamat Anda" name="alamat">
                  </div>        
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                   <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Tanah</label>
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Ulang Alamat Anda" value="<?php echo $view['lokasi_tnh'];?>" name="lks_tanah">
                  </div>     
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kepemilikan</label>
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Ulang Alamat Anda" value="<?php echo $view['bukti_milik'];?>" disabled>
                  </div>        
                 <div class="form-group">
                    <label for="exampleInputFile"></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="bukti">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran Tanah</label>
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Ukuran Tanah" value="<?php echo $view['ukuran_tnh'];?>" name="ukuran_tnh">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titik Koordinat</label>
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Titik Koordinat" value="<?php echo $view['titik_koordinat'];?>" name="titik_koordinat">
                  </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Status</label> <br>
                     <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option_a1" autocomplete="off" checked> Belum Disetujui
                      </label>
                      <label class="btn bg-olive">
                        <input type="radio" name="status" id="option_a2" autocomplete="on"> Sudah Disetujui
                      </label>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Petugas</label>
                    <input type="adress" class="form-control" value="<?php echo $tampil['idPetugas']; 
                        
                    ?>" id="exampleInputAdress" placeholder="Automatic" name="petugas">
                  </div>

                  <button type="submit" class="btn btn-primary">Simpan</button>
                
                </div>  
                </div>
                 
              </form>
        
         
 
            


            </div>
          </div>
        </div>

</section>









