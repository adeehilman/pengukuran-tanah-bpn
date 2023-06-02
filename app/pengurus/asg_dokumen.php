   <?php 

$q = mysqli_query($koneksi,"SELECT * FROM tb_dokumen WHERE id_dok");
$tampil = mysqli_fetch_array($q);
?>  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title" class="font-weight-bold">Dokumen Data Permohonan</h3><br>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Dokumen 1</th>
                    <th>Dokumen 2</th>
                    <th>Dokumen 3</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $no = 0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_permohonan JOIN tb_dokumen ON tb_permohonan.idDok = tb_dokumen.id_dok");
                      while($pemohon = mysqli_fetch_array($query)){
                        $no++
                    ?>

                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $pemohon['nama']?></td>
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
                          echo "<a href='#'>SK Telah Diterbitkan</a>";
                        }
                      

                    ?></td>
                    <td><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-default" >
                  Sunting
                </button></td>
                    </tr>
                    
                  <?php } ?>
              </tbody>
            </table>  
            </div>
          </div>
        </div>
      </div> 

<div class="modal fade" id="modal-default" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               <form id="quickForm" method="post" action="crud/st_dokumen.php ">
                <div class="modal-body">
                  <div class="form-group">
                   <label for="exampleInputEmail1">Status SK Tanah<label>
                </div>
                 
                  <div class="form-group">
                    <input class="form-control" id="exampleInputName"  value="<?php echo $tampil['id_dok'];?>" name="id">
                        <select class="form-control select" style="width: 100%;" name="status">
                          <option selected="selected" value="0">Belum diperiksa</option>
                          <option value="1">Sedang dalam pemeriksaan</option>
                          <option value="2">Dokumen ditolak</option>
                          <option value="3">Sk Tanah diterbitkan</option>
                          
                        </select>
                      </div>
                </div>
              
                 <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup </button>
                </div>
              </div>
              </form>  
            </div>
          </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  