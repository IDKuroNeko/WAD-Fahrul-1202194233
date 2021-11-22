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
        include "Fahrul_Koneksi.php";
        $show = "SELECT * FROM Buku_table WHERE id_buku =".$_GET['id'];
        $query = mysqli_query($koneksi, $show);
        $row = mysqli_num_rows($query);
    ?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="collapse navbar-collapse container-fluid" id="navbarNav">
            <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" style="width: 150px;">
            <a class="btn btn-primary" type="submit" href="Fahrul_Input.php">Tambah Buku</a>
    </div>
    </nav>
    
    <?php
        $detail = mysqli_fetch_array($query);
        $tg = explode(',', $detail['tag']);
        ?>
        <div class="container" style="margin-top: 100px">
            <div class="row" style="box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);">
               <h2 style="text-align: center; margin-top: 50px">Detail Buku</h2>
               <div class="row">
                  <img src="gmbr/<?php echo $detail['gambar']?>" class="card-img-top" style="display: block; margin-left: auto; margin-right: auto; width: 500px; height: 650px; margin-top: 125px:">
               </div>
               <hr class="bg-primary border-1 border-primary">
               <p style="font-weight:bold; font-size: 25px">Judul :</p>
               <p class="text" style="font-size: 20px"><?php echo $detail['judul_buku']?></p>
               <p style="font-weight:bold; font-size: 25px">Penulis :</p>
               <p class="text" style="font-size: 20px"><?php echo $detail['penulis_buku']?></p>
               <p style="font-weight:bold; font-size: 25px">Tahun Terbit :</p>
               <p class="text" style="font-size: 20px"><?php echo $detail['tahun_terbit']?></p>
               <p style="font-weight:bold; font-size: 25px">Deskripsi :</p>
               <p class="text" style="font-size: 20px"><?php echo $detail['deskripsi']?></p>
               <p style="font-weight:bold; font-size: 25px">Bahasa :</p>
               <p class="text" style="font-size: 20px"><?php echo $detail['bahasa']?></p>
               <p style="font-weight:bold; font-size: 25px">Tag :</p>
               <p class="text" style="font-size: 20px"><?php echo $detail['tag']?></p>
               <button type="button" class="d-grid gap-2 col-4 mx-auto btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Sunting</button>
                <a href="Fahrul_Delete.php?id=<?php echo $detail['id_buku']?>" class="d-grid gap-2 col-4 mx-auto btn btn-danger">Hapus</a>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="Fahrul_Update.php" method="post" style="text-align: left" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $detail['id_buku'] ?>" Name="id">    
                <div class="mb-3">
                    <label for="judulbuku" class="form-label" style="font-weight:bold">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" id="judul" required="required" placeholder="Contoh: Pemrograman Web Bersama EAD" value="<?php echo $detail['judul_buku']?>">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label" style="font-weight:bold">Penulis</label>
                    <input class="form-control" type="text" value="Fachrul_1202194233" name="penulis" required="required" aria-label="readonly input example" readonly>
                </div>
                <div class="mb-3">
                    <label for="tahunterbit" class="form-label" style="font-weight:bold">Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun" required="required" placeholder="Contoh: 1990" value="<?php echo $detail['tahun_terbit']?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label" style="font-weight:bold">Deskripsi</label>
                    <textarea class="form-control" placeholder="Contoh : Buku Berisi Tentang ..." name="deskripsi" style="height: 100px" value="<?php echo $detail['deskripsi']?>"><?php echo $detail['deskripsi']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="bahasa" class="form-label" style="font-weight:bold">Bahasa&emsp;</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="bahasa[]" value="Indonesia" <?php if($detail['bahasa'] == "Indonesia") echo "checked"?>>
                        <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa[]" value="Lainnya" <?php if($detail['bahasa'] == "Lainnya") echo "checked"?>>
                        <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label" style="font-weight:bold">Tag&emsp;</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Pemrograman" <?php if (in_array("Pemrograman", $tg)) echo "checked";?>>
                        <label class="form-check-label" for="inlineCheckbox1">Pemrograman</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Website" <?php if (in_array("Website", $tg)) echo "checked";?>>
                        <label class="form-check-label" for="inlineCheckbox2">Website</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Java" <?php if (in_array("Java", $tg)) echo "checked";?>>
                        <label class="form-check-label" for="inlineCheckbox2">Java</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="OOP" <?php if (in_array("OOP", $tg)) echo "checked";?>>
                        <label class="form-check-label" for="inlineCheckbox2">OOP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="MVC" <?php if (in_array("MVC", $tg)) echo "checked";?>>
                        <label class="form-check-label" for="inlineCheckbox2">MVC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Kalkulus" <?php if (in_array("Kalkulus", $tg)) echo "checked";?>>
                        <label class="form-check-label" for="inlineCheckbox2">Kalkulus</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Lainnya" <?php if (in_array("Lainnya", $tg)) echo "checked";?>>
                        <label class="form-check-label" for="inlineCheckbox2">Lainnya</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label" style="font-weight:bold">Gambar</label>
                    <input class="form-control" type="file" name="gambar">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="save" id="save">Save changes</button>
                </div>
               
            </form>
            
            </div>   
        </div>
</div>
</div>
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