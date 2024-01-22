<?php

include "koneksi.php";

$id=$_POST['buku_id'];
$buku_id=$_POST['buku_id'];
$judul=$_POST['judul'];
$nama_pengarang=$_POST['nama_pengarang'];
$tahun_terbit=$_POST['tahun_terbit'];
$keterangan=$_POST['keterangan'];


$ubah=$koneksi->query("update buku set buku_id='$buku_id', judul='$judul', nama_pengarang='$nama_pengarang', tahun_terbit='$tahun_terbit', keterangan='$keterangan' where buku_id='$id'");

if($ubah==true){

    header("location:tampil-buku.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>