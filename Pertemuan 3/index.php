<?php
include('koneksi.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Selamat datang</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="wrapper-index">
            <center><h1>Data mahasiswa</h1></center>
            <center><a href="tambah_data.php">+ &nbsp; Tambah data</a></center>
            <br />
            <table style="background-color: white;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Olahraga favorit</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM mahasiswa2 ORDER BY id ASC"; //menjalankan query untuk menampilkan semua data
                    $hasil = mysqli_query($koneksi, $query);

                    if(!$hasil) {
                        die("Query error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    $nomor = 1;
                    while($baris = mysqli_fetch_assoc($hasil)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $baris['nim'] ?></td>
                        <td><?php echo $baris['nama'] ?></td>
                        <td><?php echo $baris['jeniskelamin'] ?></td>
                        <td><?php echo $baris['agama'] ?></td>
                        <td><?php echo $baris['olahraga'] ?></td>
                        <td style="text-align: center;"><img src="images/<?php echo $baris['foto'] ?>" style="width:120px;"></td>
                        <td style="width: 105px;">
                            <a href="edit_data.php?id=<?php echo $baris['id'] ?>">Edit</a>
                            <a href="proses_hapus.php?id=<?php echo $baris['id'] ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                        $nomor++;
                    }?>
                </tbody>
            </table>
        </div>
    </body>
</html>