<?php 

$id_users = $_SESSION['id_users'];
?>    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Permohonan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nik</th>
                    <th>Email</th>
                    <th>No. Handphone</th>
                    <th>Alamat</th>
                    <th>Lokasi Tanah</th>

                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $no = 0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_petugas  INNER JOIN tb_divisi ON tb_petugas.idDivisi = tb_divisi.idDivisi ");
                      while($pemohon = mysqli_fetch_array($query)){
                        $no++
                    ?>
                  
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $pemohon['nama_petugas'];?></td>
                    <td><?php echo $pemohon['nik'];?></td>
                    <td><?php echo $pemohon['no_telp'];?></td>
                    <td><?php echo $pemohon['alamat_ptg'];?></td>
                    <td><?php echo $pemohon['job'];?></td>
                    <td><?php echo $pemohon['nama_divisi'];?></td>
                   <?php } ?>
        <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hasil Pengukuran</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form id="quickForm" method="post" action="crud/tambah_data.php ">
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputNama">Nama Lengkap</label>
                    <input class="form-control" id="exampleInputName"  value="<?php echo $id_users ?> " name="id_user" hidden>
                    <input class="form-control" id="exampleInputName" placeholder="Masukkan nama lengkap anda" name="nama">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input class="form-control" id="exampleInputNik" placeholder="Masukkan NIK Anda" name="nik">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Alamat Email Anda" name="email">
                  </div>
                   <!-- phone mask -->
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <div class="input-group">
                        <input type="text" class="form-control"
                        data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask placeholder="Masukkan No. Hp Anda" name="nope">
                      </div>
                    </div>
                    <!-- /.form group -->  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInput" >Provinsi</label>

                        <select class="form-control select2" style="width: 100%;" name="provinsi">
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

                        <select class="form-control select2" style="width: 100%;" name="kelurahan">
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
                        <select class="form-control select2" style="width: 100%;" name="kota">
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
                        <select class="form-control select2" style="width: 100%;"name="kecamatan">
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
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Alamat Lengkap Anda" name="alamat">
                  </div>        
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                   <div class="form-group">
                    <label for="exampleInputLokasi">Lokasi Tanah</label>
                    <textarea class="form-control" id="exampleInputLokasi" placeholder="Masukkan Lokasi Tanah" name="lks_tanah"></textarea>
                 <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="bukti">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran Tanah</label>
                    <input type="adress" class="form-control" id="exampleInputAdress" placeholder="Masukkan Ukuran Tanah" name="ukuran_tnh">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputLokasi">Titik Koordinat</label>
                    <textarea class="form-control" id="exampleInputLokasi" placeholder="Masukkan Titik Koordinat" name="titik_koordinat"></textarea>
                  </div>
                  <input class="form-control" id="exampleInputName"  value="<?php echo $id_users ?> " name="id_user" hidden>


                  <button type="submit" class="btn btn-primary">Simpan</button>
                
                </div>  
                </div>
                 
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  