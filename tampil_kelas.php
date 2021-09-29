<!DOCTYPE html>
<html lang="en">
<head>
<title>Index Ngab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
        </li>
        </ul>
    </div>  
        </nav>
        <br>
        <h3 style="text-bold">Tampil Kelas | <a href="tambah_kelas.php" class="btn btn-success">Tambah Kelas</a></h3>
    <br>
    <br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th>NO</th><th>Kelas</th><th>Kelompok</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($conn, "select * from kelas");
            $no=0;
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            $no++;?>

            <tr>
                <td><?=$no?></td>
                <td><?=$data_kelas['nama_kelas']?></td>
                <td><?=$data_kelas['kelompok']?></td>


              
                <td>
                <a href="hapuskelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>