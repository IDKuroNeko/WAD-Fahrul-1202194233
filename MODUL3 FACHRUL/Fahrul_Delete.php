<?php
	include("Fahrul_Koneksi.php");

	$idbk = $_GET['id'];
	$query_run = mysqli_query($koneksi,"DELETE FROM buku_table WHERE id_buku=$idbk");
	
    if($query_run)
    {
        echo "<script> alert('Data Delete');
        document.location.href = 'Fahrul_Home.php'; </script>";
    }else{
        echo "Gagal";
    }
?>