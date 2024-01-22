<!doctype HTML>
<html>
<head>
    <title>Data Buku</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>TabelBuku</h1>

        <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>

           
        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>buku_id</th><th>judul</th><th>nama_pengarang</th><th>tahun_terbit</th><th>keterangan</th>  
                <th>
                    <a href="input-buku.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
                
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from buku order by judul ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['buku_id']?></td>
                <td><?php echo $row['judul']?></td>
                <td><?php echo $row['nama_pengarang']?></td>
                <td><?php echo $row['tahun_terbit']?></td>
                <td><?php echo $row['keterangan']?></td>
             
                <td>

                <a href="edit-buku.php?id=<?php echo $row['buku_id']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-buku.php?id=<?php echo $row['buku_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>

            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>