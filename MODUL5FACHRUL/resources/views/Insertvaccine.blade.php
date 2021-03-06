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

    <title>HOME</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Welcome.blade.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Vaccine.blade.php"><b>VACCINE</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Patient.blade.php">PATIENT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="padding-top:40px">
            <h4 align="center">Input Vaccine</h4>
            <div>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Vaccine Name</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <div class="input-group mb-3"> 
                            <span class="input-group-text">Rp</span>
                            <input class="form-control" type="number" min="1" step="any">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input class="form-control" type="file">
                    </div>
                    <a type="submit" class="btn btn-primary" href="Listvaccine.blade.php">Submit</a>
                </form>
            </div>
        </div>

  <div id="footer">
        <footer class="footer" style="margin-top: 320px;">
            <p style="text-align: center; padding:10px">??2021 Copyright <a data-bs-toggle="modal" data-bs-target="#biodata" href="...">Ahmad Fachrulroji_1202194233</p>
        </footer>
    </div>
    <div class="modal fade" id="biodata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kesan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      <div class="modal-body">
          <p>Kesan     :</p>
          <p>kesan saya saya kita praktikum menyenangkan ternyata membuat pusing dikarenakan harus mempelajari 
                materi yang banyak dalam 1 minggu saya bandung bukan bandung bondowoso 
                yang bisa membangun 1000 candi dalam 1 malam ahahaha, 
                tapi cukup seru selama satu semester ini dalam tiap minggu praktikum wadnya
                terimakasih buat bang farhan yang sudah membantu selama praktikum ini berjalan
                semoga ilmu yang diberikan oleh bang farhan dan rekan rekan asprak yang lain dapat 
                bermanfaat khususnya untuk saya sendiri kedepannya.</p>
          <p>Pesan     :</p>
          <p>kalau bisa modulnya di permudah lagi untuk kedepannya, dan juga semoga kedepannya sudah tidak online lagi perkuliahannya ahahaha</p>
      </div>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
