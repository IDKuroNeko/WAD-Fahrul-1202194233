<!doctype html>
<?php
         $name = $_POST['name'];
         $eventdate = $_POST['eventdate'];
         $starttime = $_POST['starttime'];
         $duration = $_POST['duration'];
         $buildingtype = $_POST['buildingtype'];
         $phonenumber = $_POST['phonenumber'];
         $service = count($_POST['service']);
         $co = $eventdate." ".$starttime;          
         $lastday = date("Y-m-d H:i:s", (strtotime($co) + 60 * 60 * $duration));
    ?>
    
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

  </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="Home.php">Home</a>
                    <a class="nav-link active" aria-current="page" href="Booking.php">Booking</a>
                </div>
            </div>
        </nav>
        <h4 align="center">Thank you Fachrul_1202194233 for Reserving</h4>
        <h5 align="center">Please double check your reservation details</h5>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Building Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?php echo(rand(11111111111,99999999999)) ?></th>
                    <th><?php echo "Fachrul_1202194233" ?></th>
                    <th><?php echo $eventdate." ".$starttime ?></th>
                    <th><?php echo $lastday?></th>
                    <th><?php echo $buildingtype; 
                            if($buildingtype == "Nusantara Hall"){
                                $payrent = 2000;}
                            else if($buildingtype == "Garuda Hall"){
                                    $payrent = 1000;}
                            else if($buildingtype == "Gedung Serba Guna"){
                                $payrent = 500;}
                        ?></th>
                    <th><?php echo $phonenumber ?></th>
                    <th><?php for($i=0; $i<$service; $i++){
                            echo $_POST['service'][$i]."<br>";}?></th>
                    <th><?php echo $payrent * $duration?></th>
                </tr>
            </tbody>
        </table>
        <footer style="text-align: center; margin-top: 250px;">Create By : Fachrul_1202194233</footer>
  </body>
</html>
