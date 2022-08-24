<?php 
// koneksi database
include '../config/db.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$noTelp = $_POST['telp_anggota'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
$result = mysqli_query($koneksi,"insert into anggota values('','$nama','$jk', '$noTelp','$alamat')");

// if ($result) {
//     echo "<script>alert('Data Berhasil Di inputkan')</script>";
// }else {
//     echo "<script>alert('Data Gagal Di inputkan')</script>";    
// }
// mengalihkan halaman kembali ke page anggota.php
header("location:../beranda.php?page=anggota");
 
?>