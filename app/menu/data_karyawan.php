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
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                  Tambah
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nik</th>
                    <th>No. Handphone</th>
                    <th>Alamat</th>
                    <th>Job Status</th>
                    <th>Divisi</th>
                    <th>Aksi</th>
               
                    
                    
                   
                    

                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $no = 0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_petugas   INNER JOIN tb_divisi ON tb_petugas.idDivisi = tb_divisi.idDivisi");
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
                  
                    
                    
                    </p></td>

                    
                  <td><a href="index.php?page=edit_krywn&& id=<?php echo $pemohon['idPetugas'];?>" class="btn btn-sm btn-warning">Sunting </a>&nbsp; &nbsp;<a href="#?id=<?php echo $pemohon['idPetugas'];?>" class="btn btn-sm btn-danger">Hapus</td>
                  

                  </tr>
                <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>

      <!-- Untuk menambahkan data pegawai -->
       <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Pegawai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                              <!-- jquery validation -->
                              <div class="card card-primary">
                                <!-- form start -->
                                <form id="quickForm" method="post" action="admin/tambah_karyawan.php ">
                                  <div class="card-body">
                                    <div class="form-group">

                                      <label for="exampleInputNama">Nama Lengkap</label>
                               
                                      <input class="form-control" id="exampleInputName" placeholder="Masukkan nama lengkap anda"  name="nama">
                                       <div class="form-group">
                                        <label>Username</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control"
                                          placeholder="Masukkan Username" name="username">
                                        </div>
                                      </div>
                                            
                                 
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">NIK</label>
                                      <input class="form-control" id="exampleInputNik" placeholder="Masukkan NIK Anda"  name="nik">
                                    </div>
                                     <div class="form-group">
                                      <label for="exampleInputEmail1">No. Handphone</label>
                                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No Hp" name="nope">
                                    </div>
                                     <!-- phone mask -->
                                      <div class="form-group">
                                        <label>Alamat</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control"
                                          placeholder="Masukkan Alamat Pegawai"  name="alamat">
                                        </div>
                                      </div>
                                      <!-- /.form group -->  
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Divisi</label>

                                      <select class="form-control select2" style="width: 100%;" name="divisi">
                                        <option selected="selected" value="1">Petugas Ukur</option>
                                        <option value="2">Panitia Pemeriksa</option>
                                      </select>
                                    </div> 

                                      <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                          <input type="password" class="form-control"
                                          placeholder="Masukkan Passowrd"  name="password">
                                        </div>
                                      </div>

                                      <!-- /.form group -->  
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  
                                  </div>  
                                  </div>
                                   
                                </form>
                              </div>
                            </div>
                          </div>

                  </section>
                  </div>
                 
                </div>
                <!-- /.modal-content -->
              </div>

              <!-- /.modal-dialog -->
            </div>

            

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  