<?php 
$id_users = $_SESSION['id_users'];
$kueri = mysqli_query($koneksi,"SELECT * FROM tb_permohonan WHERE id_users='$id_users'");
$tampil = mysqli_fetch_array($kueri);
?>    

    <!-- Main content -->
    <section class="content">
      <section class="content">

            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <!-- Default box -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title" >Selamat Datang <?php echo $_SESSION['nama_user']; ?></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5>Pastikan anda telah memenuhi persyaratan ini</h5>
                      <p class="font-weight-light">1. Hasil ukur dari petugas telah dikeluarkan</p>
                      <p class="font-weight-light">2. Status telah disetujui</p>
                      <p class="font-weight-light">3. Data Pengajuan anda lengkap</p>
                      <p class="font-weight-light"></p>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                   
                    </div>
                    <!-- /.card-footer-->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </section>
      <div class="container-fluid">

        <div class="row">
          
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title" class="font-weight-bold">Data Permohonan</h3><br>
                <p>Pastikan anda mengirim data dengan benar</p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Dokumen 1</th>
                    <th>Dokumen 2</th>
                    <th>Dokumen 3</th>
                    <th>Status </th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $no = 0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_permohonan JOIN tb_dokumen ON tb_permohonan.idDok = tb_dokumen.id_dok WHERE id_users='$id_users'");
                      while($pemohon = mysqli_fetch_array($query)){
                        $no++
                    ?>

                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $pemohon['doc_satu']?></td>
                      <td><?php echo $pemohon['doc_dua']?></td>
                      <td><?php echo $pemohon['doc_tiga']?></td>
                      <td><?php 
                        if($pemohon['status_sk']=='0'){
                          echo "Belum diperiksa";
                        }else if($pemohon['status_sk']=='1'){
                          echo "Sedang Dalam Pemeriksaan";
                        }else if($pemohon['status_sk']=='2'){
                          echo "Dokumen di tolak";
                        }else{
                          echo "<a href='index.php?page=terbit'>SK Telah Diterbitkan</a>";
                        }
                      

                    ?></td>
                    </tr>

                  <?php } ?>
              </tbody>
            </table>

            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default" href="index.php?page=edit_hasilukur&& id=<?php echo $tampil['idDok'];?>">
                  Tambah Data
                </button>
             


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
              <form id="quickForm" method="post" action="crud/tambah_dokumen.php ">
             <div class="form-group">
              <input class="text" id="exampleInputName" value="<?php echo $tampil['idDok'];?>" name="id" hidden>
                    <label for="exampleInputFile">Dokumen 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input class="text" id="exampleInputName" value="<?php echo $tampil['idDok'];?>" name="id" >
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="dok1">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputFile">Dokumen 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="dok2">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputFile">Dokumen 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="dok3">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                    </div>
                  </div>
              </div>
              <button onclick="sukses()" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
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

  <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  function sukses(){
  Swal.fire(
  'Berhasil',
  'Data berhasil ditambah',
  'success');
  }

</script>