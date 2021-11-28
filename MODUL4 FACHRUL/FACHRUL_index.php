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

    <title>Index</title>
  </head>
  <body>
    <?php
    ob_start();
    if(!isset($_SESSION)){
        session_start();
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

    <div class="container" style="width:1000px;margin-top:20px">
            <h3 align="center" style="padding-top: 40px; padding-bottom: 40px; background-color: #98BAE7"><b>EAD Travel</b></h3>
            <div class="card-group">
                <div class="card">
                    <img src="https://akcdn.detik.net.id/visual/2018/12/05/ca6c277a-3a82-42de-8bdd-2e296e2fa9cc_169.jpeg?w=650" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Raja Ampat, Papua</h5>
                        <p class="card-text">Kepulauan Raja Ampat adalah kepulauan Indonesia di ujung barat laut Semenanjung Kepala Burung di Papua Barat. Terdiri dari ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan gua kuni berada di Pulau Misool, sedangkan cendrawasih merah hidup di Pulai Waigeo. Batanta dan Salawati adalah pulau-pulau utama lainnya di nusantara.</p>
                    </div>
                    <div class="card-footer">
                        <p><b>Rp7.000.000</b></p>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Rajaampat">Pesan Tiket</button>
                </div>

            <div class="modal fade" id="Rajaampat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	        <div class="modal-content">
	        <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Pemesanan Raja Ampat</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	        <div class="modal-body">
	        <form method="POST" action="FACHRUL_index.php">
                <div class="mb-3">
                    <input type="hidden" name="destinasi" value="Raja Ampat">
                    <input type="hidden" name="lokasi" value="Papua">
                    <input type="hidden" name="harga" value="7000000">
                    <label for="password" class="form-label">Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="submit" value="add">
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>

                <div class="card">
                    <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/bromo-tengger-semeru-national-park.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gunung Bromo, Malang</h5>
                        <p class="card-text">Gunung Bromo adalah gunung berapi somma aktif dan bagian dari pegunungan Tengger, di Jawa Timur, Indonesia. Pada 2.329 meter itu bukan puncak tertinggi dari massif, tetapi yang paling terkenal. Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.</p>
                    </div>
                    <div class="card-footer">
                        <p><b>Rp2.000.000</b></p>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Bromo">Pesan Tiket</button>
                </div>

                <div class="modal fade" id="Bromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	        <div class="modal-content">
	        <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Pemesanan Gunung Bromo</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	        <div class="modal-body">
	        <form method="POST" action="FACHRUL_index.php">
                <div class="mb-3">
                    <input type="hidden" name="destinasi" value="Bromo">
                    <input type="hidden" name="lokasi" value="Malang">
                    <input type="hidden" name="harga" value="2000000">
                    <label for="password" class="form-label">Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="submit" value="add">
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>

                <div class="card">
                    <img src="https://thenyaman.com/wp-content/uploads/2020/02/tanah-lot-sunset-1024x557.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tanah Lot, Bali</h5>
                        <p class="card-text">Tanah Lot adalah formasi batuan di lepas pantai pulau Bali, Indonesia. Ini adalah rumah bagi kuil ziarah Hindu kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan.</p>
                    </div>
                    <div class="card-footer">
                        <p><b>Rp5.000.000</b></p>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TanahLot">Pesan Tiket</button>
                </div>
                
                <div class="modal fade" id="TanahLot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	        <div class="modal-content">
	        <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Pemesanan Tanah Lot</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	        </div>
	        <div class="modal-body">
	        <form method="POST" action="FACHRUL_index.php">
                <div class="mb-3">
                    <input type="hidden" name="destinasi" value="TanahLot">
                    <input type="hidden" name="lokasi" value="Bali">
                    <input type="hidden" name="harga" value="5000000">
                    <label for="password" class="form-label">Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="submit" value="add">
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>
        </div>
        </div>

    <?php
    $koneksi = mysqli_connect('localhost','root','','wad_modul4');
    if(isset($_POST['submit'])){
        $id = $_SESSION['id'];
        $tempat = $_POST['destinasi'];
        $lokasi = $_POST['lokasi'];
        $tanggal = $_POST['tanggal'];
        $harga = $_POST['harga'];
        $push = mysqli_query($koneksi,"INSERT INTO booking (user_id,nama_tempat,lokasi,harga,tanggal) values ('$id','$tempat','$lokasi','$harga','$tanggal')");
        if($push){
        $_SESSION['name'] = $nama;
        header("Location: FACHRUL_booking.php");
        }else{
            echo mysqli_error($koneksi);
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

    <div id="footer">
        <footer class="footer" style="background-color: #B8E4F0; margin-top: 85px;">
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
  </body>
</html>
