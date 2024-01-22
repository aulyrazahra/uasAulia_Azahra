<!doctype HTML>
<html>
<head>
    <title>Form Edit Buku</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-buku.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from buku where buku_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="buku_id">buku_id</label>
                        <input type="hidden" name="buku_id" value="<?php echo $row['buku_id']?>" class="form-control">
                        <input type="number" name="buku_id" value="<?php echo $row['buku_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="judul">judul</label>
                        <input type="text" name="judul" value="<?php echo $row['judul']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pengarang">nama_pengarang</label>
                        <input type="text" name="nama_pengarang" value="<?php echo $row['nama_pengarang']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tahun_terbit">tahun_terbit</label>
                        <textarea name="tahun_terbit" class="form-control"><?php echo $row['tahun_terbit']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">keterangan</label>
                        <textarea name="keterangan" class="form-control"><?php echo $row['keterangan']?></textarea>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>