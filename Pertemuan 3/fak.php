<?php include('koneksi.php') ?>
<!doctype html>
<html>
    <head>
        <title>Tugas Daffa</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <form action="" name="">
                <label for="nim">NIM</label>
                <input id="nim" type="text">
                <br /><br />

                <label for="nama">Nama</label>
                <input id="nama" type="text">
                <br /><br />

                <p>Jenis Kelamin</p>
                <input type="radio" id="opt-pria" value="pria" name="jk">
                <label for="opt-pria">Pria</label>

                <input type="radio" id="opt-wanita" value="wanita" name="jk">
                <label for="opt-wanita">Wanita</label>
                <br /><br />

                <label for="agama">Agama</label>
                <select name="agama" id="agama">
                    <option value="null" disabled selected>Pilih agama anda</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                </select>
                <br /><br />
                
                <label for="">Olahraga favorit</label>
                <br /><br />
                <input type="checkbox" id="bola" name="bola" value="bola">
                <label for="bola">Sepak bola</label><br />
                <input type="checkbox" id="basket" name="basket" value="basket">
                <label for="basket">Basket</label><br />
                <input type="checkbox" id="futsal" name="futsal" value="futsal">
                <label for="futsal">Futsal</label><br />
                <input type="checkbox" id="renang" name="renang" value="renang">
                <label for="renang">renang</label><br />
                <input type="checkbox" id="badminton" name="badminton" value="badminton">
                <label for="badminton">Badminton</label><br /><br />
                
                <div id="unggah-foto">
                    <label for="upload-file">Unggah foto profil anda</label><br />
                    <input type="file" name="upload-file" id="upload-file">
                </div>
                <input type="button" id="submit" value="Tambahkan">
            </form>
        </div>
    </body>
</html>