<!doctype HTML>
<html>
<head>
    <title>TabelBuku</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>TabelBuku</h1>
           
        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>buku_id</th><th>judul</th><th>nama_pengarang</th><th>tahun_terbit</th><th>keterangan</th>
               
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