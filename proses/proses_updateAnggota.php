<?php 
// koneksi database
include '../config/db.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_anggota'];
var_dump($id);
$nama = $_POST['nama'];
var_dump($nama);
$jk = $_POST['jk'];
var_dump($jk);
$noTelp = $_POST['telp_anggota'];
var_dump($noTelp);
$alamat = $_POST['alamat'];
var_dump($alamat);
 
// update data ke database
mysqli_query($koneksi,"update anggota set nama_anggota='$nama', jk_anggota='$jk', telp_anggota='$noTelp',  alamat_anggota='$alamat' where id_anggota='$id'");
 
// mengalihkan halaman kembali ke page anggota.php
header("location:../beranda.php?page=anggota");
 
?>