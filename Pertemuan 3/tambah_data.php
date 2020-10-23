<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Tambah data</title>
    </head>
    <body>
        <div class="wrapper-tambah">
            <center><h1 style="font-weight: bold;">Tambah data</h1></center>
            <svg onclick="window.location.href='index.php'" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="50"
viewBox="0 0 172 172"
style=" fill:#000000;position:fixed; top: 20px;left:20px; cursor: pointer;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M2.65391,86c0,-46.02344 37.32266,-83.34609 83.34609,-83.34609c46.02344,0 83.34609,37.32266 83.34609,83.34609c0,46.02344 -37.32266,83.34609 -83.34609,83.34609c-46.02344,0 -83.34609,-37.32266 -83.34609,-83.34609z" fill="#fa8072"></path><path d="M77.73594,86.90703c10.31328,-10.31328 20.62656,-20.62656 30.93984,-30.93984c9.00312,-9.00313 -5.00547,-22.91094 -14.04219,-13.87422c-12.63125,12.63125 -25.2625,25.2625 -37.89375,37.89375c-3.82969,3.82969 -3.69531,10.17891 0.06719,13.94141c12.63125,12.63125 25.2625,25.2625 37.89375,37.89375c9.00313,9.00313 22.91094,-5.00547 13.87422,-14.04219c-10.27969,-10.31328 -20.55938,-20.59297 -30.83906,-30.87266z" fill="#ffffff" ></path></g></g></svg>
            <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                <section class="base">
                    <div class="form">
                        <label for="nama">NIM</label>
                        <input type="text" id="nim" name="nim" autofocus required>
                    </div>

                    <div class="form">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>

                    <div class="form">
                        <label>Jenis kelamin</label>
                        <div class="input-grup">
                            <label for="jk-pria" class="input-label ppria">
                            <input type="radio" id="jk-pria" name="jk" value="Pria" required>
                            Pria
                            </label>
                        </div>
                        <div class="input-grup">
                            <label for="jk-wanita" class="input-label wawanita">
                            <input type="radio" id="jk-wanita" name="jk" value="Wanita" required>
                            Wanita
                            </label>
                        </div>
                    </div>

                    <div class="form aagama">
                        <label for="agama">Agama</label><br /><br />
                        <select name="agama" id="agama" required>
                            <option value="null" disabled selected>Pilih agama anda</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </div>

                    <div class="form form-checkbox">
                        <label for="olahraga">Olahraga favorit</label> <br />
                        <label for="bola" class="label-checkbox">
                        <input type="checkbox" id="bola" name="olahraga[]" value="Sepak Bola">
                        Sepak bola <img src="https://img.icons8.com/ios-filled/64/000000/football2.png" style="width: 15px;"/>
                        </label>
                        <label for="basket" class="label-checkbox">
                        <input type="checkbox" id="basket" name="olahraga[]" value="Basket">
                        Basket <img src="https://img.icons8.com/color/48/000000/basketball.png" style="width: 17px; margin-left: 34px;"/>
                        </label>
                        <label for="futsal" class="label-checkbox">
                        <input type="checkbox" id="futsal" name="olahraga[]" value="Futsal">
                        Futsal <img src="https://img.icons8.com/doodle/48/000000/football2--v1.png" style="width: 16px; margin-left: 40px;"/>
                        </label>
                        <label for="renang" class="label-checkbox">
                        <input type="checkbox" id="renang" name="olahraga[]" value="Renang">
                        Berenang <img src="https://img.icons8.com/color/48/000000/swimming.png" style="width: 20px; margin-left: 8px;"/>
                        </label>
                        <label for="badminton" class="label-checkbox">
                        <input type="checkbox" id="badminton" name="olahraga[]" value="Badminton">
                        Badminton <img src="https://img.icons8.com/dusk/64/000000/shuttercock.png" style="width: 15px;"/>
                        </label>
                    </div>
                    <div class="form">
                        <label>Foto mahasiswa</label>
                        <input type="file" name="foto" required>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn-submit" name="submit">Simpan data</button>
                        <button type="reset" class="btn-reset">Reset!!!</button>
                    </div>
                </section>
            </form>
        </div>
    </body>
</html>