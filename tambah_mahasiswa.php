<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <from action="proses_tambah_mhs.php" method="POST">
      Nama :
      <input type="text" name="nama" value="" class="form-control"> <br>
        NIM :
        <input type="text" name="nim" value="" class="form-control"> <br>
        Alamat :
        <input type="text" name="alamat" value="" class="form-control"> <br>
        Username :
        <input type="text" name="username" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">
        <a href="datamahasiswa.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</body>
</html>