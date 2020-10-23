<?php
include 'koneksi.php';

// var_dump($_GET['id']);
if(isset($_GET['id'])) { //checking apakah di url ada nilai GET id
    $id = $_GET['id']; //Ambil nilai id dari url dan simpan ke variabel id

    $query = "SELECT * FROM mahasiswa2 WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result) { //jika data gagal diambil / $result tidak ada hasilnya
        die("Query error".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    // $sql = mysqli_query($koneksi,$query);
    $data_olahraga = explode(" , ", $data['olahraga']);
    // print_r($result);
    if(!count($data)) { //Jika pada result tidak terdapat apa2 atau kosong (!data) 
        echo "<script>alert('Kesalahan pada databases (data tidak ditemukan)');window.location='index.php';</script>";
    }
}else { //Apabila tidak ada data GET id, akan di redirect ke index
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>

<!doctype html>
<html>
<head>
    <title>Edit data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>Edit data <?php echo $data['nama'] ?></h1></center>
    <svg onclick="window.location.href='index.php'" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;position:fixed; top: 20px;left:20px; cursor: pointer;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M2.65391,86c0,-46.02344 37.32266,-83.34609 83.34609,-83.34609c46.02344,0 83.34609,37.32266 83.34609,83.34609c0,46.02344 -37.32266,83.34609 -83.34609,83.34609c-46.02344,0 -83.34609,-37.32266 -83.34609,-83.34609z" fill="#fa8072"></path><path d="M77.73594,86.90703c10.31328,-10.31328 20.62656,-20.62656 30.93984,-30.93984c9.00312,-9.00313 -5.00547,-22.91094 -14.04219,-13.87422c-12.63125,12.63125 -25.2625,25.2625 -37.89375,37.89375c-3.82969,3.82969 -3.69531,10.17891 0.06719,13.94141c12.63125,12.63125 25.2625,25.2625 37.89375,37.89375c9.00313,9.00313 22.91094,-5.00547 13.87422,-14.04219c-10.27969,-10.31328 -20.55938,-20.59297 -30.83906,-30.87266z" fill="#ffffff" ></path></g></g></svg>
    <div class="wrapper-tambah">
        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
            <section class="base">
                <!-- Menampung id data mahasiswa yang akan di edit, tetapi tidak perlu kita tampilkan -->
                <input value="<?php echo $data['id'] ?>" name="id" hidden>
                <div class="form">
                    <label for="nama">NIM</label>
                    <input type="text" id="nim" name="nim" value="<?php echo $data['nim'] ?>" autofocus required>
                </div>

                <div class="form">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>" required>
                </div>

                <div class="form">
                    <label>Jenis kelamin</label>
                    <div class="input-grup">
                        <label for="jk-pria" class="input-label ppria">
                        <input type="radio" id="jk-pria" name="jk" value="Pria" required <?php if($data['jeniskelamin']=="Pria") echo 'checked'?>>
                        Pria
                        </label>
                    </div>
                    <div class="input-grup">
                        <label for="jk-wanita" class="input-label wawanita">
                        <input type="radio" id="jk-wanita" name="jk" value="Wanita" required <?php if($data['jeniskelamin']=="Wanita") echo'checked'?>>
                        Wanita
                        </label>
                    </div>
                </div>

                <div class="form aagama">
                    <label for="agama">Agama</label><br /><br />
                    <select name="agama" id="agama" required>
                        <option value="null" disabled>Pilih agama anda</option>
                        <option value="Islam" <?php if($data['agama'] == "Islam") echo 'selected'?>>Islam</option>
                        <option value="Kristen Protestan" <?php if($data['agama'] == "Kristen Protestan") echo 'selected'?>>Kristen Protestan</option>
                        <option value="Kristen Katolik" <?php if($data['agama'] == "Kristen Katolik") echo 'checked'?>>Kristen Katolik</option>
                        <option value="Budha" <?php if($data['agama'] == "Budha") echo 'selected'?>>Budha</option>
                        <option value="Hindu" <?php if($data['agama'] == "Hindu") echo 'selected'?>>Hindu</option>
                    </select>
                </div>

                <div class="form form-checkbox">
                    <label for="olahraga">Olahraga favorit</label> <br />
                    <label for="bola" class="label-checkbox">
                    <input type="checkbox" id="bola" name="olahraga[]" value="Sepak Bola" <?php if(in_array("Sepak Bola", $data_olahraga)) echo 'checked'?>>
                    Sepak bola
                    </label>
                    <label for="basket" class="label-checkbox">
                    <input type="checkbox" id="basket" name="olahraga[]" value="Basket" <?php if(in_array("Basket", $data_olahraga)) echo 'checked'?>>
                    Basket
                    </label>
                    <label for="futsal" class="label-checkbox">
                    <input type="checkbox" id="futsal" name="olahraga[]" value="Futsal" <?php if(in_array("Futsal", $data_olahraga)) echo 'checked'?>>
                    Futsal
                    </label>
                    <label for="renang" class="label-checkbox">
                    <input type="checkbox" id="renang" name="olahraga[]" value="Renang" <?php if(in_array("Renang", $data_olahraga)) echo 'checked'?>>
                    Berenang
                    </label>
                    <label for="badminton" class="label-checkbox">
                    <input type="checkbox" id="badminton" name="olahraga[]" value="Badminton" <?php if(in_array("Badminton", $data_olahraga)) echo 'checked'?>>
                    Badminton
                    </label>
                </div>
                <div class="form">
                    <label>Foto mahasiswa</label>
                    <img src="./images/<?php echo $data['foto']?>" alt="Foto profil" style="float: left; margin-bottom: 5px; width: 120px;">
                    <input type="file" name="foto">
                    <i style="float: left; font-size: 11px; color: red;">Abaikan jika tidak merubah foto</i>
                </div>
                <div class="form-submit" style="margin-top: 17px;">
                    <button type="submit" class="btn-submit" name="submit">Simpan data</button>
                </div>
            </section>
        </form>
    </div>
</body>
</html>