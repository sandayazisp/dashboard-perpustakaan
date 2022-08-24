<?php 
// koneksi database
include '../config/db.php';
 
// menangkap data id yang di kirim dari url
$id_anggota = $_GET['id_anggota'];
// var_dump($id_anggota);
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from anggota where id_anggota='$id_anggota'");
 
// mengalihkan halaman kembali ke page anggota.php
header("location:../beranda.php?page=anggota");
 
?>