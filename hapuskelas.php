<?php 
    if($_GET['id_kelas']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from kelas");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus siswa');location.href='tampil_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus siswa');location.href='tampil_kelas.php';</script>";
        }
    }
?>
