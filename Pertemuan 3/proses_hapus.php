<?php 
include 'koneksi.php';
$id = $_GET['id'];

$query = "DELETE FROM mahasiswa2 WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if(!$result) {
    die("Gagal menghapus data : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}else {
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
}
?>