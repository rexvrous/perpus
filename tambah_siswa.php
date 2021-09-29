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
    <a href="tampil_siswa.php" class="btn btn-success">Kembali</a>
    <br>
    <br>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        Nama Siswa : 
        <input type="text" name="nama_siswa" value="" class="form-control">
        Tanggal Lahir : 
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Gender : 
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Kelas
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        Jurusan
        <select name="id_jurusan" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_jurusan=mysqli_query($conn,"select * from jurusan");
            while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
                echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';    
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <br>

        <input type="Submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>