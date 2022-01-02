<?php
ob_start();
error_reporting(0);
include '../core/Session.php';
Session::init();
Session::checkSession2();
include '../core/Database.php';
include'../core/Format.php';
include'../class/System.php';

$system = new System();

$user_id = Session::get('user_id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Patient Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <h5 class="simple-text logo-mini"> Hi, <?php echo Session::get('name');?></h5>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="PatientDashboard.php">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <h5>Dashboard</h5>
                        </a>
                    </li>
                    <li>
                        <a href="donorinformation.php">
                            <i class="fas fa-info"></i>
                            <h5>Donor Information</h5>
                        </a>
                    </li>
                    <li>
                        <a href="UserProfile.php">
                            <i class="tim-icons icon-single-02"></i>
                            <h5>User Profile</h5>
                        </a>
                    </li>
                    <li>
                        <a href="updatePassword.php">
                            <i class="tim-icons icon-single-02"></i>
                            <h5>Update Password</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <h3 class="navbar-brand">Plasma Bank Management</h3>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="../assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="?uid=<?php Session::get('user_id'); ?>" class="nav-item dropdown-item">Log
                                            out</a></li>
                                            <?php
                                                if (isset($_GET['uid'])) {
                                                    Session::destroy();
                                                }
                                            ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->