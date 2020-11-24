<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Portal Bisnis</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/snackbar.css">

</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#">Back Office Portal Bisnis UP</a></li>
                <li> <a href="<?= base_url('kelola_user') ?>">Kelola User</a></li>
                <li> <a href="<?= base_url('kelola_usaha') ?>">Kelola Usaha</a></li>
                <li> <a href="<?= base_url('kelola_laporan') ?>">Kelola Laporan</a></li>
                <li> <a href="<?= base_url('backOffice?s=loggedout') ?>">Log Out</a></li>
            </ul>
        </div>