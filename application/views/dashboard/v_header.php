<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Sistem Informasi Maintenance Forklift PT Djarum</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/DataTables/datatables.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/awesome/css/font-awesome.min.css'; ?>">
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/DataTables/datatables.js'; ?>"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="<?php echo base_url() . 'dashboard'; ?>" class="navbar-brand">Maintenance Forklift</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'dashboard'; ?>" class="nav-link"><i class="fa fa-home"></i>
                        Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'dashboard/petugas'; ?>" class="nav-link"><i class="fa fa-users"></i>
                        Petugas</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'dashboard/forklift'; ?>" class="nav-link"><i class="fa fa-book"></i>
                        Forklift</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'dashboard/operator'; ?>" class="nav-link"><i class="fa fa-user"></i>
                        Operator</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'dashboard/pengajuan'; ?>" class="nav-link"><i class="fa fa-book"></i>
                        Pengajuan</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'dashboard/maintenance'; ?>" class="nav-link"><i class="fa fa-book"></i>
                        Maintenance</a>
                    </li>
                   
                </ul>
                <span class="navbar-text mr-3 text-center">
                    Halo, <?php echo $this->session->userdata('nama'); ?> [admin]
                </span>
                <a href="<?php echo base_url() . 'dashboard/logout'; ?>" class="btn btn-outline-light ml-1"><i class="fa fa-power-off"></i>
                KELUAR</a>
            </div>
        </div>
    </nav>
    <br>
    <br>
