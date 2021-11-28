<?php
$koneksi = mysqli_connect("localhost","root","","wad_modul4");
$idbk = $_GET['idbookings'];

mysqli_query($koneksi,"DELETE FROM booking WHERE id='$idbk'");
header("location:FACHRUL_booking.php");
?>