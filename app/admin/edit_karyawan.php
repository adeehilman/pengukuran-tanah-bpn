<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_petugas WHERE idPetugas='$id'");
$view = mysqli_fetch_array($query);
?>

<!--MODAL UNTUK EDIT DATA KARYAWAN-->
              <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                              <!-- jquery validation -->
                              <div class="card card-primary">
                                <!-- form start -->
                                <form id="quickForm" method="post" action="admin/update_karyawan.php ">
                                  <div class="card-body">
                                    <div class="form-group">

                                      <label for="exampleInputNama">Nama Lengkap</label>
                               
                                      <input class="form-control" id="exampleInputName" placeholder="Masukkan nama lengkap anda" name="nama" value="<?php echo $view['nama_petugas'];?>">
                                      <input class="form-control" id="exampleInputName" placeholder="Masukkan nama lengkap anda" value="<?php echo $view['idPetugas'];?>" name="id" hidden>
                                       <div class="form-group">
                                        <label>User Id</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control"
                                          placeholder="Masukkan Username" name="username"  value="<?php echo $view['id_users'];?>" disabled>
                                        </div>
                                      </div>
                                            
                                 
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">NIK</label>
                                      <input class="form-control" id="exampleInputNik" placeholder="Masukkan NIK Anda"  value="<?php echo $view['nik'];?>" name="nik">
                                    </div>
                                     <div class="form-group">
                                      <label for="exampleInputEmail1">No. Handphone</label>
                                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No Hp" name="nope"  value="<?php echo $view['no_telp'];?>">
                                    </div>
                                     <!-- phone mask -->
                                      <div class="form-group">
                                        <label>Alamat</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control"
                                          placeholder="Masukkan Alamat Pegawai"  value="<?php echo $view['alamat_ptg'];?>" name="alamat">
                                        </div>
                                      </div>
                                      <!-- /.form group -->
                                      <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                          <input type="password" class="form-control"
                                          placeholder="Masukkan Passowrd" name="password" disabled value="124123123">
                                        </div>
                                      </div>  
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Divisi</label>

                                      <select class="form-control select2" style="width: 100%;" name="divisi"  value="<?php echo $view['idDivisi'];?>">
                                        <option selected="selected" value="1">Petugas Ukur</option>
                                        <option value="2">Panitia Pemeriksa</option>
                                      </select>
                                    </div>
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Job</label>

                                      <select class="form-control select2" style="width: 100%;" name="job"  value="<?php echo $view['job'];?>">
                                        <option selected="selected" value="on">On</option>
                                        <option value="off">Off</option>
                                      </select>
                                    </div>

                                      

                                      <!-- /.form group -->  
                                    <button onclick="sukses()"  type="submit" class="btn btn-primary">Simpan</button>
                                  
                                  </div>  
                                  </div>
                                   
                                </form>
                              </div>
                            </div>
                          </div>

                  </section>
                  <script>
  function sukses(){
  Swal.fire(
  'Data Berhasil Diubah!',
  '',
  'success',
  timer: 1000,
  timerProgressBar: true
)
  }

</script>