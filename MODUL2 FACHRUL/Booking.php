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
        background-color: #EDF6E5;
      }
      a:hover{
        background-color: #D5D5D5;
      }
      </style>

    <title>ESD Venue</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #B5EAEA;">
  <div class="navbar mx-auto">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Booking.php">Booking</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="content" style="background-color: #B5EAEA; margin-top: 20px;">
      <div class="cari" style="text-align: center; color: black;">
        <p>Reserve Your Venue Now!</p>
      </div>
    </div>

    <div class="card-body row justify-content-around">
      <div class="col-4" style="padding-top: 32px">
          <img src="https://weddingmarket.com/storage/images/artikelidea/d43df113c6c34c7ed6d41c8f36521052cf262ff9.webp" class="card-img-top" style="margin-left: 10px; width: 500px; height: 300px">
      </div>
      <div class="col-4">
          <form>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="fachrul_1202194233" readonly id="name">
              </div>
              <div class="form-group">
                  <label for="eventdate">Event Date</label>
                  <input type="date" class="form-control" id="eventdate">
              </div>
              <div class="form-group">
                  <label for="starttime">Start Time</label>
                  <input type="time" class="form-control" id="starttime">
              </div>
              <div class="form-group">
                  <label for="duration">Duration (Hours)</label>
                  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelect">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="buildingtype">Building Type</label>
                  <select class="form-control" id="buildingtype">
                      <option>Nusantara Hall</option>
                      <option>Garuda Hall</option>
                      <option>Gedung Serba Guna</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="phonenumber">Nomor HP</label>
                  <input type="tel" class="form-control" id="phonenumber">
              </div>
              <div class="form-group">
                  <label for="services">Add Service(s)</label>
                  <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="catering">
                      <label class="form-check-label" for="catering">Catering ($700)</label>
                  </div>
                  <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="decoration">
                      <label class="form-check-label" for="decoration">Decoration ($450)</label>
                  </div>
                  <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="soundsystem">
                      <label class="form-check-label" for="soundsystem">Sound System ($250)</label>
                  </div>
              </div>
              <div class="card-body text-center">
            <a href="Mybooking.php" class="btn btn-primary">Book</a>
          </div>
          </form>
      </div>
  </div>
</div>  

        <footer style="text-align: center; margin-top: 250px;">Create By : Fachrul_1202194233</footer>
  </body>
</html>
