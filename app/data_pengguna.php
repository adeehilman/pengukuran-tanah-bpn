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
                    <th>Bukti Kepemilikan</th>
                    <th>Ukuran Tanah</th>
                    <th>Titik Koordinat</th>
                    <th>Status</th>
                    <th>Petugas</th>
                    <th>Aksi</th>
                    <th>Hasil Ukur</th>

                    
                    
                   
                    

                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $no = 0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_permohonan JOIN tb_status ON tb_permohonan.idStatus = tb_status.idStatus JOIN tb_petugas ON tb_permohonan.idPetugas = tb_petugas.idPetugas WHERE id_users='$id_users'");
                      while($pemohon = mysqli_fetch_array($query)){
                        $no++
                    ?>
                  
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $pemohon['nama'];?></td>
                    <td><?php echo $pemohon['nik'];?></td>
                    <td><?php echo $pemohon['email'];?></td>
                    <td><?php echo $pemohon['no_telp'];?></td>
                    <td><?php echo $pemohon['alamat'];?></td>
                    <td><?php echo $pemohon['lokasi_tnh'];?></td>
                    <td><?php echo $pemohon['bukti_milik'];?></td>
                    <td><p style="font-weight-bold"><?php echo $pemohon['ukuran_tnh'];?></p></td>
                    <td><p style="font-weight-bold"><?php echo $pemohon['titik_koordinat'];?></p></td>
                    <td><?php echo $pemohon['status'];?></td>
                    <td><p style="font-weight-bold"><?php 

                          echo $pemohon['nama_petugas'];                      
                    

                      
                    ?>
                    </p></td>

                    <td><a href="index.php?page=edit&& id=<?php echo $pemohon['idPermohonan'];?>" class="btn btn-sm btn-warning">Sunting</td>
                    <td>

                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                  Detail
                </button>

                    </td>

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
      <?php 
      $q = mysqli_query($koneksi,"SELECT * FROM tb_permohonan JOIN hasil_ukur ON tb_permohonan.idHasil = hasil_ukur.id_Hasil WHERE id_users='$id_users'");
      $v = mysqli_fetch_array($q);
      ?>
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
            <table class="table">
              <thead>
              <tbody>
                <tr>
                <td>
                  Tanggal Pengukuran
                  
                </td>
                <td>:     <?php echo $v['tgl_pengukuran']; ?></td>
                </tr>
               <td>
                  NIB
                </td>
                <td>
                   :      <?php echo $v['nib'];?>
                </td>
                <tr>
                  <td>
                    Luas Tanah
                  </td>
                  <td>
                    :      <?php echo $v['luas_tnh'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    Keadaan Tanah
                  </td>
                  <td>
                     :     <?php echo $v['keadaan_tnh'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    Penggunaan
                  </td>
                  <td>
                     :     <?php echo $v['penggunaan'];?>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
              
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

  