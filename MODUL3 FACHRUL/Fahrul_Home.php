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
    
    <title>Home</title>
  </head>
  <body>
  <?php
  include 'Fahrul_Koneksi.php';
  $koneksi = mysqli_connect("localhost", "root", "", "modul3");
  $bk = mysqli_query($koneksi, "SELECT * FROM buku_table");

  ?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="collapse navbar-collapse container-fluid" id="navbarNav">
            <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" style="width: 150px;">
            <a class="btn btn-primary" type="submit" href="Fahrul_Input.php">Tambah Buku</a>
    </div>
    </nav>
              <?php
              if(mysqli_fetch_array($bk) == null){
                echo '<div class="container" style="margin-top: 200px">';
                echo '<div class="row">';
                echo '<center><h1>Belum Ada Buku</h1>';
                echo '<hr><p>Silahkan Tambahkan Buku</p></center>';
                echo '</div>';
                echo '</div>';
              }else{
              ?>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($bk as $b){ ?>
                  <div class="col">
                    <div class="card">
                    <img src="gmbr/<?php echo $b['gambar']?>" class="card-img-top" style="display: block; margin-left: auto; margin-right: auto; width: 300px; height: 450px; margin-top: 125px">
                     <div class="card-body">
        <h5 class="card-title" style="font-weight:bold; font-family: Times New Roman, Times, serif; font-size: 25px"><?php echo $b['judul_buku']?></h5>
        <p class="card-text" style="font-family: Times New Roman, Times, serif; font-size: 15px"><?php echo $b['deskripsi']?></p>
        <a href="Fahrul_Detail.php?id=<?php echo $b['id_buku']?>"class="btn btn-primary">Detail Buku</a>
      </div>
    </div>
  </div>
                <?php } ?>
                </div>
              <?php
              }
              ?>
              


    <center>
    <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" style="width: 150px; margin-top : 500px; margin-bottom: 15px">
    <h3 style="font-weight: bold">Perpustakaan EAD</h3>
    <footer>© Fachrul_1202194233</footer>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
