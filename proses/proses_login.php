<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config/db.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['uname'];
$password = sha1($_POST['pswd']);
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($result);
var_dump($cek);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['nama_petugas'] = $data['nama_petugas'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['id_petugas'];
	header("location:../beranda.php");
} else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    
	header("location:../index.php");
}
?>