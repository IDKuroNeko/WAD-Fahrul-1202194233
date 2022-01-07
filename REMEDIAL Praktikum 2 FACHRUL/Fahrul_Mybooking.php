<!DOCTYPE html>
<html>
    <head>
        <title>My Booking</title>

        <style type="text/css">
            body {background-color: #F3F0D7;}
        </style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #CEE5D0;">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="Fahrul_Home.php">Home</a>
                    <a class="nav-link active" aria-current="page" href="Fahrul_Booking.php">Booking</a>
                </div>
            </div>
        </nav>
        <h4 align="center" style="background-color: #F3F0D7;">Thank you Fachrul_1202194233 for Reserving</h4>
        <h5 align="center" style="background-color: #F3F0D7;">Please double check your reservation details</h5>
        <table class="table" style="background-color: #F3F0D7;">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Room Type</th>
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
                            if($buildingtype == "Suite Room"){
                                $payrent = 1000;}
                            else if($buildingtype == "Deluxe Room"){
                                    $payrent = 750;}
                            else if($buildingtype == "Standard Room"){
                                $payrent = 250;}
                        ?></th>
                    <th><?php echo $phonenumber ?></th>
                    <th><?php for($i=0; $i<$service; $i++){
                            echo $_POST['service'][$i]."<br>";}?></th>
                    <th><?php echo $payrent * $duration?></th>
                </tr>
            </tbody>
        </table>
        <br><br><br>
        <footer><center>Created by: Fachrul_1202194233</center></footer>  
    </body>
</html>