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
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_permohonan INNER JOIN tb_status ON tb_permohonan.idStatus = tb_status.idStatus INNER JOIN tb_petugas ON tb_permohonan.idPetugas = tb_petugas.idPetugas WHERE id_user='$id_users'");
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

                    <td><a href="index.php?page=edit_adm&& id=<?php echo $pemohon['idPermohonan'];?>" class="btn btn-sm btn-warning">Sunting </a> &nbsp;&nbsp;<a href="index.php?page=edit_hasilukur&& id=<?php echo $pemohon['idHasil'];?>" class="btn btn-sm btn-success">Sunting Hasil Ukur</td>

                    <td>

                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default" >
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
      $q = mysqli_query($koneksi,"SELECT * FROM tb_permohonan JOIN hasil_ukur ON tb_permohonan.idHasil = hasil_ukur.id_Hasil ");
      $v = mysqli_fetch_array($q);
      ?>
        <div class="modal fade" id="modal-default" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body"></div>
                 <table class="table">
            
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup </button>
                </div>
            </div>
          </div>
        <!-- /.modal-dialog -->
      </div>




      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

  <script>
  function sukses(){
  Swal.fire(
  'Data Berhasil Diubah!',
  '',
  'success'
)
  }

</script>