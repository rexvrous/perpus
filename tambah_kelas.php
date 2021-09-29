<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
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
    <a href="tampil_kelas.php" class="btn btn-success">Kembali</a>
    <br>
    <br>
    <h3>Tambah Kelas</h3>
    
    <form action="proses_tambah_kelas.php" method="post">
        Nama Kelas : 
        <input type="text" name="nama_kelas" value="" class="form-control">
        kelompok : 
        <input type="text" name="kelompok" value="" class="form-control"> <br>
        <input type="Submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>