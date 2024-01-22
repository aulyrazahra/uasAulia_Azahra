<!doctype HTML>
<html>
<head>
    <title>Form Input Buku</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-buku.php" method="POST">
                    <div class="form-group">
                        <label for="buku_id">buku_id</label>
                        <input type="number" name="buku_id" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="judul">judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pengarang">nama_pengarang</label>
                        <input type="text" name="nama_pengarang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tahun_terbit">tahun_terbit</label>
                        <textarea name="tahun_terbit" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">keterangan</label>
                        <textarea name="keterangan" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>