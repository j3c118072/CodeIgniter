<?php
include 'koneksi.php';

//Inisiasi variabel
$id = $_POST['id'];

$nim = strtoupper($_POST['nim']);
$nama = ucwords($_POST['nama']);
$jk = ucfirst($_POST['jk']);
$agama = ucwords($_POST['agama']);
$olahraga = implode(" , ", $_POST['olahraga']);
$foto = $_FILES['foto']['name'];

if($foto != "") {
    $foto_ekstensi = array('png','jpg');
    $x = explode('.',$foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_foto_baru = $angka_acak.'-'.$foto;

    if(in_array($ekstensi, $foto_ekstensi) === true) {
        move_uploaded_file($file_tmp, './images/'.$nama_foto_baru);

        $query = "UPDATE mahasiswa2 SET nim = '$nim', nama = '$nama', jeniskelamin = '$jk', agama = '$agama', olahraga = '$olahraga', foto = '$nama_foto_baru' WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        if(!$result) { //Jika error
            die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
        }else {
            echo "<script>alert('Data berhasil di update');window.location='index.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi gambar hanya boleh jpg atau png');window.location='edit_produk.php';</script>";
    }
} else {
    $query = "UPDATE mahasiswa2 SET nim = '$nim', nama = '$nama', jeniskelamin = '$jk', agama = '$agama', olahraga = '$olahraga' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
        die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil diupdate.');window.location='index.php';</script>";
    }
}
?>