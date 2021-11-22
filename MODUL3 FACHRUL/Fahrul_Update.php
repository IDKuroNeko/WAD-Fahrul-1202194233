<?php
include 'Fahrul_Koneksi.php';
if (isset($_POST['save']))
{
    $idbk = $_POST['id'];
    $judulbuku = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $deskripsi = $_POST['deskripsi'];
    $tag = implode(",",$_POST['tag']);
    $bahasa = implode($_POST['bahasa']);
    $gmb = $_FILES['gambar']['name'];
    $pathinfo = pathinfo($gmb, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'gmbr/'.$_FILES['gambar']['name']);

    $query = "UPDATE buku_table SET judul_buku = '$judulbuku', tahun_terbit = '$tahun', deskripsi = '$deskripsi', tag = '$tag', bahasa = '$bahasa' WHERE id_buku = '$idbk'";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script> alert('Data Updated');
        document.location.href = 'Fahrul_Home.php'; </script>";
    }else{
        echo "Gagal";
    }
}
    ?>