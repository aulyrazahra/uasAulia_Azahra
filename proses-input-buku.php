<?php

$buku_id=$_POST['buku_id'];
$judul=$_POST['judul'];
$nama_pengarang=$_POST['nama_pengarang'];
$tahun_terbit=$_POST['tahun_terbit'];
$keterangan=$_POST['keterangan'];

include "koneksi.php";

$simpan=$koneksi->query("insert into buku(buku_id,judul,nama_pengarang,tahun_terbit,keterangan) 
                        values ('$buku_id', '$judul', '$nama_pengarang', '$tahun_terbit','$keterangan')");

if($simpan==true){

    header("location:tampil-buku.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>