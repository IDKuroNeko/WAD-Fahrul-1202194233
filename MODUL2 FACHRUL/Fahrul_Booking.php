<!DOCTYPE html>
    <html>
        <head>
            <title>Booking</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <style type="text/css">
            body {background-color: #F3F0D7;}
        </style>
        
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
            <br>
            <div class="card">
                <div class="container" style="background-color: #F3F0D7;">
                    <div class="row">
                        <div class="col-12 mb-3" align="center" style="color:black;background-color:#CEE5D0">Reserve your venue now!</div>
                    </div>
                </div>
                <div class="card-body row justify-content-around" style="background-color: #F3F0D7;">
                    <div class="col-4" style="padding-top: 32px">
                        <img src="https://thebrideview.files.wordpress.com/2015/10/somerset-wedding-venue-almonry-barn-rustic-wedding-venue-coco-wedding-venues-kerry-bartlett-photography-002.jpg" class="card-img-top" style="margin-left: 5px; width: 600px; height: 400px">
                    </div>
                    <div class="col-4">
                        <form action="Fahrul_Mybooking.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Fachrul_1202194233" readonly id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="eventdate">Event Date</label>
                                <input type="date" class="form-control" id="eventdate" name="eventdate">
                            </div>
                            <div class="form-group">
                                <label for="starttime">Start Time</label>
                                <input type="time" class="form-control" id="starttime" name="starttime">
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration (Hours)</label>
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelect" name="duration">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="buildingtype">Building Type</label>
                                <select class="form-control" id="buildingtype" name="buildingtype">
                                    <option>Nusantara Hall</option>
                                    <option>Garuda Hall</option>
                                    <option>Gedung Serba Guna</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phonenumber">Nomor HP</label>
                                <input type="tel" class="form-control" id="phonenumber" name="phonenumber">
                            </div>
                            <div class="form-group">
                                <label for="services">Add Service(s)</label>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="catering" name="service[]">
                                    <label class="form-check-label" for="catering">Catering ($700)</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="decoration" name="service[]">
                                    <label class="form-check-label" for="decoration">Decoration ($450)</label>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="soundsystem" name="service[]">
                                    <label class="form-check-label" for="soundsystem">Sound System ($250)</label>
                                </div>
                            </div>
                            <center><input class="btn btn-primary" type="submit" value="Submit"></center>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br>
        <footer><center>Created by: Fachrul_1202194233</center></footer>  
        </body>
    </html>