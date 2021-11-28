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

    <title>Profile</title>
  </head>
  <body>

  <?php
    ob_start();
    if(!isset($_SESSION)){
        session_start();
    }
    $koneksi = mysqli_connect("localhost","root","","wad_modul4");
    $id = $_SESSION['id'];
    $usr = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id'");
    $db = mysqli_fetch_array($usr);
        if(!isset($_SESSION['id'])){
            header("location: FACHRUL_login.php");  
        }
?>

    
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B8E4F0;">
    <div class="container-fluid" style="margin-left: 100px;margin-right: 10px;">
        <a class="navbar-brand fw-bold" href="FACHRUL_index.php">EAD Travel</a>
        <div class="d-flex" style="margin-left: 40px;margin-right: 10px;" >
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selamat Datang!<?php echo $_SESSION['name']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="FACHRUL_profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="FACHRUL_logout.php">Logout</a></li>
          </ul>
        </li>
    </ul>    

        </div>
    </div>
</nav>

    <div class="container">
            <div class="row justify-content-center" style="margin: 50px; background-color: white">
                <div class="col-15">
                    <form>
                        <h3 align="center"><b>Profile</b></h5>
                        <br>
                        <div class="form-group row" style="margin-bottom:20px">
                            <label for="email" class="col-3 col-form-label">Email</label>
                            <div class="col-9" style="margin-top:7px">
                                <p><?php echo $db['email']?></p>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom:20px">
                            <label for="name" class="col-3 col-form-label">Nama</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="<?php echo $db['nama']?>">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom:20px">
                            <label for="phone" class="col-3 col-form-label">Nomor Handphone</label>
                            <div class="col-9">
                                <input type="tel" class="form-control" id="phone" name="hp" value="<?php echo $db['no_hp']?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row" style="margin-bottom:20px">
                            <label for="password" class="col-3 col-form-label">Kata Sandi</label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom:20px">
                            <label for="passwordauth" class="col-3 col-form-label">Konfirmasi Kata Sandi</label>
                            <div class="col-9">
                                <input type="password" class="form-control" name="passwordauth" placeholder="Konfirmasi Kata Sandi">
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom:20px">
                            <label for="warna" class="col-3 col-form-label">Warna Navbar</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="color" value="">
                            </div>
                        </div>
                        <center>
                            <div class="row justify-content-evenly">
                                <div class="col-3">
                                        <button type="button" class="btn btn-primary" name="submit">Simpan</button>
                                        <button type="button" class="btn btn-warning">Cancel</button>
                                </div>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>

        <div id="footer">
        <footer class="footer" style="background-color: #B8E4F0; margin-top: 325px;">
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

    <?php
        $koneksi = mysqli_connect('localhost','root','','wad_modul4');
        if(isset($_POST['submit'])){
            $id = $_SESSION['id'];
            $nama = $_POST['name'];
            $email = $_POST['email'];
            $nohp = $_POST['hp'];
            $pwd = mysqli_real_escape_string($koneksi,$_POST['password']);
            $pwdauth = mysqli_real_escape_string($koneksi,$_POST['passwordauth']);
            if($pwd != null){
                if($pwd == $pwdauth){
                    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $query = "UPDATE user SET nama='$nama',password='$password',no_hp='$nohp' WHERE id='$id'";
                    mysqli_query($koneksi,$query);
                    header("location: FACHRUL_profile.php");
                    exit();
                }
            }else{
                    $query = "UPDATE user SET nama='$nama',no_hp='$nohp' WHERE id='$id'";
                    mysqli_query($koneksi,$query);
                    header("location: FACHRUL_profile.php");
                    exit();
            }
        }
        ob_end_flush();
?>
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
