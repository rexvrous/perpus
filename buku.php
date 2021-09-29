<?php
    include "header.php";
?>
<h2>Daftar Buku</h2>
<div class = "row">
    <?php
    include "Koneksi.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($dt_buku = mysqli_fetch_array($qry_buku)){
        ?>
        <div class = "col-md-3">
            <div class = "card">
                <img src="book.jpg"class="card-img-top">
                <div class="card-body">
                Judul Buku :
                <h5 class="card-title"><?=$dt_buku['judul_buku']?></h5>
                Penulis :
                <h6 class="card-text"><?=substr($dt_buku['penulis'], 0,20)?></h6>
                Penerbit :
                <h6 class="card-text"><?=substr($dt_buku['penerbit'], 0,20)?></h6>
                Deskripsi :
                <h6 class="card-text"><?=substr($dt_buku['deskripsi'], 0,40)?></h6>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
include "footer.php";
?>