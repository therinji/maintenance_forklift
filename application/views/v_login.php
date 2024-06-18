<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Perpustakaan Desa Pasuruhan Lor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>">
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
</head>
<body class="bg-dark">
    <div class="bg-dark">
        <div class="container">
        <br>
        <br>
        <br>
            <h3 class="font-weight-normal text-center text-white">SISTEM INFORMASI</h3>
            <h2 class="font-weight-normal text-center text-white"><b>MAINTENANCE FORKLIFT</b></h2>
            <h2 class="font-weight-normal text-center text-white mb-5"><b>PT DJARUM</b></h2>


            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if(isset($_GET['alert'])){
                            if($_GET['alert'] == "gagal"){
                                echo "<div class='alert alert-danger font-weight-bold text-center'>LOGIN GAGAL!</div>";
                            }else if($_GET['alert'] == "belum_login"){
                                echo "<div class='alert alert-danger font-weight-bold text-center'>SILAHKAN LOGIN TERLEBIH DAHULU!</div>";
                            }else if($_GET['alert'] == "logout"){
                                echo "<div class='alert alert-success font-weight-bold text-center'>ANDA TELAH LOGOUT!</div>";
                            }
                        }
                        ?> 

                        <h4 class="font-weight-bold text-center mb-3 mt-3">LOGIN</h4>

                        <!-- validasi error -->
                        <?php echo validation_errors(); ?>

                        <form action="<?php echo base_url() . 'login/login_aksi'; ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username</label> 
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username">   
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label> 
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password">   
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>