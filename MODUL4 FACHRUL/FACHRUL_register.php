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

    <title>Register</title>
  </head>
  <body>

  <?php
    session_start();
    ob_start();
    if(isset($_SESSION['id'])){
        header("location: FACHRUL_index.php");  
    }
?>
    
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B8E4F0;">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">EAD TRAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="register" href="FACHRUL_register.php">Register</a>
              <a class="nav-link active" href="FACHRUL_login.php">Login</a>
            </div>
          </div>
      </div>
    </nav>


    <div class="container" style="width:600px;margin-top:20px; background-color : white">
            <h3 align="center"><b>Register</b></h3>
            <hr>
            <form method="post" action="FACHRUL_register.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-mail">
                  </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Handphone</label>
                    <input type="tel" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor Handphone">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
                </div>
                <div class="mb-3">
                    <label for="passwordauth" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="passwordauth" placeholder="Konfirmasi Kata Sandi Anda">
                </div>
                <center><button type="submit" class="btn btn-primary" name="daftar">Daftar</button></center>
            </form>
            <br>
            <p align="center">Anda sudah punya akun? <a href="FACHRUL_login.php">Login</a></p>
        </div>

    <div id="footer">
        <footer class="footer" style="background-color: #B8E4F0; margin-top: 250px;">
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
    if(!isset($_SESSION)){
        session_start();
    }
    $koneksi = mysqli_connect('localhost','root','','wad_modul4');
    if(isset($_POST['daftar'])){
        $nama = $_POST['name'];
        $email = $_POST['email'];
        $nohp = $_POST['hp'];
        $pwd = mysqli_real_escape_string($koneksi,$_POST['password']);
        $pwdauth = mysqli_real_escape_string($koneksi,$_POST['passwordauth']);

        $auth = "SELECT * FROM user WHERE email='$email'";
        $select = mysqli_query($koneksi, $auth);

        if (mysqli_fetch_assoc($select)==null) {
            if ($pwd == $pwdauth) {
                $pwd = password_hash($pwd, PASSWORD_DEFAULT);
                $query = "INSERT INTO user (nama, email, password, no_hp) VALUES ('$nama','$email','$pwd','$nohp')";
                mysqli_query($koneksi,$query);
                $_SESSION['pesan'] = 'Berhasil registrasi!';
                header("location: FACHRUL_login.php");
                exit();
            }
        }
        $_SESSION['pesan'] = 'Email anda sudah terdaftar, silahkan gunakan Email lain!';
        header("location: FACHRUL_register.php");
        exit();
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
