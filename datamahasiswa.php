<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>
    <h1>Data Mahasiswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <table class="table table-hoover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NIM</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include "koneksi.php";
        $qry_mahasiswa = mysqli_query($koneksi,"select * from mahasiswa");
        $no=0;
        while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
        $no++;?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data_mahasiswa['nama'] ?></td>
                <td><?= $data_mahasiswa['nim'] ?></td>
                <td><?= $data_mahasiswa['alamat'] ?></td>
                <td><?= $data_mahasiswa['username'] ?></td>
                <td>
                <a href="edit.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" class="btn btn-success">Edit</a> |
                <a href="hapus.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>      
        </tbody>
    </table>      
</body>
</html>