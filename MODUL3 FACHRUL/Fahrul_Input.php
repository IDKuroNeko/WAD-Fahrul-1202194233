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
    
    <title>Tambah Buku</title>

  </head>
  <body>
  <?php
  include 'Fahrul_Koneksi.php';
  $koneksi = mysqli_connect("localhost", "root", "", "modul3");


  ?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="collapse navbar-collapse container-fluid" id="navbarNav">
            <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" style="width: 150px;">
            <a class="btn btn-primary" type="submit" href="">Tambah Buku</a>
    </div>
    </nav>
            <div class="container" style="margin-top: 150px">
                <div class="row">
                <center><p style="font-weight: bold; font-size: 34px">Tambah Data Buku <p></center>

                <form action="Fahrul_tambah.php" method="post" style="text-align: left" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judulbuku" class="form-label" style="font-weight:bold">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" id="judul" required="required" placeholder="Contoh: Pemrograman Web Bersama EAD">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label" style="font-weight:bold">Penulis</label>
                    <input class="form-control" type="text" value="Fachrul_1202194233" name="penulis" required="required" aria-label="readonly input example" readonly>
                </div>
                <div class="mb-3">
                    <label for="tahunterbit" class="form-label" style="font-weight:bold">Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun" required="required" placeholder="Contoh: 1990">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label" style="font-weight:bold">Deskripsi</label>
                    <textarea class="form-control" placeholder="Contoh : Buku Berisi Tentang ..." name="deskripsi" style="height: 100px"></textarea>
                </div>
                <div class="mb-3">
                    <label for="bahasa" class="form-label" style="font-weight:bold">Bahasa&emsp;</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="bahasa[]" value="Indonesia">
                        <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa[]" value="Lainnya">
                        <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label" style="font-weight:bold">Tag&emsp;</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Pemrograman">
                        <label class="form-check-label" for="inlineCheckbox1">Pemrograman</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Website">
                        <label class="form-check-label" for="inlineCheckbox2">Website</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Java">
                        <label class="form-check-label" for="inlineCheckbox2">Java</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="OOP">
                        <label class="form-check-label" for="inlineCheckbox2">OOP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="MVC">
                        <label class="form-check-label" for="inlineCheckbox2">MVC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Kalkulus">
                        <label class="form-check-label" for="inlineCheckbox2">Kalkulus</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Lainnya">
                        <label class="form-check-label" for="inlineCheckbox2">Lainnya</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label" style="font-weight:bold">Gambar</label>
                    <input class="form-control" type="file" name="gambar">
                </div>
                <div class="d-grid gap-2">
                    <input class="d-grid gap-2 col-4 mx-auto btn btn-primary" name="create"  id="create" type="submit" value="+ Tambah">
                </div>
                </form>
</div>
</div>

    <center>
    <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" style="width: 150px; margin-top : 500px; margin-bottom: 15px">
    <h3 style="font-weight: bold">Perpustakaan EAD</h3>
    <footer>© Fachrul_1202194233</footer>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>