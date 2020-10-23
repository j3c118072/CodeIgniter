<div class="container">
        <h2>Program studi</h2>
        <p>
            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah data</a>
        </p>
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Aksi</th>
                    <th>Kode</th>
                    <th>Program studi</th>
                    <th>Ketua</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($dataProdi as $row):?>
                <tr>
                    <th>
                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Ubah</a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </th>
                    <td><?= $row->kode_prodi ?></td>
                    <td><?= $row->nama_prodi ?></td>
                    <td><?= $row->ketua_prodi ?></td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
    </div>

    <!-- <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody> -->
    </table>