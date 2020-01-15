<!DOCTYPE html>
<html>
<?php
    @$login = $_GET['login'];
    if ($login == 'true') {
        @$user=$_GET['id']; 
    }
?> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
</head>

<body>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-warning clean-navbar">
        <?php 
        if ($login == 'true') {
            echo '<div class="container"><a class="navbar-brand text-white logo" href="../index.php?login=true&id='.$user.'">KostKita<br></a>';}
        else {
            echo '<div class="container"><a class="navbar-brand text-white logo" href="../index.php">KostKita<br></a>';}
        ?>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                    <?php 
                    if ($login == 'true') {
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white active" href="../index.php?login=true&id='.$user.'">Home</a></li>';
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white " href="../catalog/index.php?login=true&id='.$user.'">Kost</a></li>';
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white" href="../about/index.php?login=true&id='.$user.'">About Us</a></li>';     
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white" href="index.php?login=false">Logout</a></li>'; 
                    }
                        else {
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white active" href="../index.php">Home</a></li>';
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white " href="../catalog/index.php">Kost</a></li>';
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white" href="../about/index.php">About Us</a></li>';
                        echo '<li class="nav-item" role="presentation"><a class="nav-link text-white" href="../login/index.php">Login</a></li>';
                    }
                    ?>
                        </ul>
                    </div>
                </div>
            </nav>
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-warning">About Us</h2>
                    <p>Profile anggota kelompok.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="../assets/img/avatars/hilal.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Hilal</h4>
                                <p class="card-text">Mahasiswa Teknik Informatika<br></p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src=" ../assets/img/avatars/hendrik.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Hendrik</h4>
                                <p class="card-text">Mahasiswa Teknik Informatika</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="../assets/img/avatars/rohman.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Rohman</h4>
                                <p class="card-text">Mahasiswa Teknik Informatika<br></p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 KostKita Corp</p>
        </div>
    </footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>