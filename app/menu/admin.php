<?php session_start();

include('../conf/config.php');
$id = $_SESSION['id_users'];
$query = mysqli_query($koneksi, "SELECT * FROM posts INNER JOIN users ON posts.id_user = users.id_users WHERE id_users = '$id'");

// $kueri = mysqli_fetch_array($query);
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CREAVO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="assets/img/svg" href="https://i.ibb.co/Dpw76vg/Logo.png">
    <link href="assets/img/logo.PNG" rel="icon">
    <link href="assets/img/logo.PNG" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugin/sweetalert2/sweetalert2.min.css">
    <script src="assets/plugin/sweetalert2/sweetalert2.min.js"></script>


</head><!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class=" container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.html"><img src="assets/img/logo.PNG" alt=""> </a></h1>

        </div>

        <nav id="navbar" class="navbar me-auto">
            <ul>
                <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="#category">Category</a></li>
                <li><a class="nav-link scrollto" href="#aboutus">About Us</a></li>
                <li><a class="nav-link scrollto " href="upload.php">Upload</a></li>




            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <nav class="navbar nav-right">
            <ul>

                <li class="dropdown"><a href="#"><i class="bi bi-person-circle" style="font-size: 2rem;"></i></a>
                    <ul>
                        <li><a aria-disabled="" style="font-weight: bold; color: #fff;"><?= $_SESSION['username']; ?></a></li>
                        <div class="divider"></div>
                        <li><a href="pages/profil.php">Account</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="logout.php" onclick="return confirm('Yakin ingin keluar?')">Log Out</a></li>

                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</header><!-- End Header -->

<main id="main">
    <!-- ======= Services Section ======= -->
    <!-- ======= Pricing Section ======= -->
    <section id="services" class="services">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body shadow-lg">

                            <img src="assets/img/users/<?= $_SESSION['foto']; ?>" class="rounded-circle shadow-lg" width="150px" alt="">
                            <h2 style="font-weight: bold;"><?= $_SESSION['nama_lengkap']; ?></h3>
                                <span><?= $_SESSION['nim']; ?></span>
                                <p style="color: grey;">Music, PBL, Typography </p>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="About Me"></textarea>
                                </div>
                                <br>
                                <i class="bl bi-instagram" style="font-size: 2rem;"><a href="#"></a></i>

                                <i class="bl bi-linkedin" style="font-size: 2rem;"><a href="#"></a></i>
                                <i class="bl bi-twitter" style="font-size: 2rem;"><a href="#"></a></i>


                        </div>
                    </div>

                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="col-lg-4">

                        <?php foreach ($query as $k) : ?>
                            <div class="icon-box shadow-lg">

                                <video width="100%" height="100" controls>
                                    <source src="assets/img/uploads/<?= $k['file']; ?>" type="video/mp4">

                                    Your browser does not support the video tag.
                                </video>
                                <!-- <img src="assets/img/images/" alt=""> -->
                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-stretch " style="font-weight: bold;">
                                        <?= $k['judul']; ?>

                                    </div>
                                    <p style="color: grey; font-weight: thin;"><?= $k['created_at']; ?></p>
                                    <div class="col-md-6 d-flex align-items-stretch " style="font-weight: bold;">

                                    </div>

                                    <div class="col-md-12 d-flex mt-10 " style="font-weight: bold;">
                                        <button class="btn btn-warning" class="btn btn-info" data-toggle="modal" data-target="#UploadEdit"><i class="bi bi-pencil-fill" style="font-size: 1rem; color:#fff"></i></button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-danger mt 10"><i class="bi bi-trash-fill" style="font-size: 1rem; color:#fff"></i></button>

                                    </div>



                                </div>


                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-4">

                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="UploadEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card">
                                                <div class="card-body shadow-lg">
                                                    <div class="mb-5">
                                                        <form action="crud/editfile.php" method="post" enctype="multipart/form-data">
                                                            <label for="Image" class="form-label"></label>
                                                            <input class="form-control" type="file" id="formFile" name="file" value="" onchange="preview()">

                                                    </div>
                                                    <img id="frame" src="" class="img-fluid" />


                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-8 col-md-6">
                                            <div class="card">
                                                <div class="card-body shadow-lg">
                                                    <?php foreach ($query as $k) : ?>
                                                        <input type="" name="id_users" value="<?= $_SESSION['id_users']; ?>" hidden>
                                                        <input type="" name="id_post" value="<?= $k['id_post']; ?>" hidden>
                                                        <input type="" name="tgl" value="<?= $k['created_at']; ?>" hidden>

                                                        <div class="form-group">

                                                            <input type="text" name="judul" class="form-control" id="name" value="<?= $k['judul']; ?>">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="" style="font-weight: bold;">Deskripsi</label>
                                                            <textarea class="form-control" name="deskripsi" rows="5" value="<?= $k['deskripsi']; ?>"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="font-weight: bold;">Tags</label>
                                                            <input type="text" name="tags" class="form-control" id="name" value="<?= $k['tag']; ?>">
                                                        </div>
                                                    
                                                    <button class="btn btn-success" type="submit">Edit</button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>





                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>

        </div>
    </section><!-- End Pricing Section -->



    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "";
        };
    </script>

</main><!-- End #main -->

<?php include('footer.php'); ?>