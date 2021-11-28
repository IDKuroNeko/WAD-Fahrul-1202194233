<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <style type="text/css">
        body{
            background: #98BAE7;
        }
    </style>

    <title>Booking Cart</title>
  </head>
  <body>

  <?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: FACHRUL_login.php");  
    }
?>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B8E4F0;">
    <div class="container-fluid" style="margin-left: 100px;margin-right: 10px;">
        <a class="navbar-brand fw-bold" href="FACHRUL_index.php">EAD Travel</a>
        <div class="d-flex">
        <ul class="navbar-nav">
        <?php if(!isset($_SESSION['name'])){?>
                <li class="nav-item">
                    <a  class="nav-link" href="FACHRUL_register.php">Register</a>
                </li>
                <li class="nav-item" style="margin-left: 10px">
                    <a class="nav-link active"  href="FACHRUL_login.php">Login</a>
                </li>
        <?php }else{ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selamat Datang! <?php echo $_SESSION['name']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="FACHRUL_profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="FACHRUL_logout.php">Logout</a></li>
          </ul>
        </li>
        <?php } ?>
    </ul>    

        </div>
    </div>
</nav>


    <?php
    if(!isset($_SESSION)){
        session_start();
    }
    $koneksi = mysqli_connect("localhost","root","","wad_modul4");
    $id = $_SESSION['id'];
    $bookings = mysqli_query($koneksi,"SELECT * FROM booking where user_id='$id'")
?>
    

    <div class="container" style="width:1200px; margin-top:20px; background-color:white">
            <h3 align="center" style="margin-top:30px"><b>Booking Cart</b></h3>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tempat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal Perjalanan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                    $f = 1;
                    foreach($bookings as $bk){ ?>
                    <tr>
                    <th scope="row"><?php echo $f++?></th>
                    <td><?php echo $bk['nama_tempat']?></td>
                    <td><?php echo $bk['lokasi']?></td>
                    <td><?php echo $bk['tanggal']?></td>
                    <td><?php echo $bk['harga']?></td>
                    <td><a href="FACHRUL_delete.php?idbookings=<?php echo $bk['id']?>" class="btn btn-danger">Hapus Booking</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
            </table>
        </div>

        <div id="footer">
        <footer class="footer" style="background-color: #B8E4F0; margin-top: 660px;">
            <p style="text-align: center; padding:10px">©2021 Copyright <a data-bs-toggle="modal" data-bs-target="#biodata" href="...">Ahmad Fachrulroji_1202194233</p>
        </footer>
    </div>
    <div class="modal fade" id="biodata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      <div class="modal-body">
          <p>Nama : Ahmad Fachrulroji</p>
          <p>NIM	: 1202194233</p>
      </div>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
