<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      .nav > .nav-item {
        color: white;
        background-color: #363636;
        padding: 20px;
        border: 2px solid black;
      }
    </style>
  </head>
  <body style="background-color: #FCE4CD;">
    <nav class="navbar navbar-light" style="background-color: #FCE4CD;" >
      <button class="navbar-brand" onclick="window.location.href='<?php echo base_url();?>';" style="background-color: transparent;border-color: transparent;">
        <img src="<?php echo base_url('assets/image/Logo_Telkom_University.png') ?>" height="60" alt="">
      </button>
      <a href="#" style="border:2px solid black; border-radius:10px">
        <img src="<?php echo base_url('assets/image/search.jpg')?>" height="60" style="margin:2px" alt="">
      </a>
    </nav>
    <div class="nav" style="background-color: #C90014;">
        <a class="nav-item nav-link" href="http://localhost/Cari-Asisten/" style="margin-left:20px;">Home</a>
        <button style="background-color: transparent;border-color: transparent; margin-left: 75%;color: white;" onclick="window.location.href='<?php echo site_url();?>/user/register';">Registration</button>
        <button style="background-color: transparent;border-color: transparent; margin-left: 5%;color: white;" onclick="window.location.href='<?php echo site_url();?>/user/login';">Login</button>
    </div>


