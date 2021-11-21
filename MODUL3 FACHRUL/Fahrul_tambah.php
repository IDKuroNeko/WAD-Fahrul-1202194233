<?php
include 'Fahrul_Koneksi.php';
if (isset($_POST['create']))
{
    $judulbuku = $_POST['judul'];
    $penulis = "Fachrulroji_1202194233";
    $tahun = $_POST['tahun'];
    $deskripsi = $_POST['deskripsi'];
    $tag = implode(",",$_POST['tag']);
    $bahasa = implode($_POST['bahasa']);
    $gmb = $_FILES['gambar']['name'];
    $pathinfo = pathinfo($gmb, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['gambar']['tmp_name'],'gmbr/'.$_FILES['gambar']['name']);

    $query = "INSERT INTO buku_table(judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES ('$judulbuku', '$penulis', '$tahun', '$deskripsi', '$gmb','$tag', '$bahasa')";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script> alert('Data Saved');
        document.location.href = 'Fahrul_Input.php'; </script>";
    }else{
        echo "Gagal";
    }
}
    ?>


