<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:index.php");
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Perpustakaan</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="asset/style/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">  


  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/fh-3.2.4/r-2.3.0/rr-1.2.8/datatables.min.css"/>

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/fh-3.2.4/r-2.3.0/rr-1.2.8/datatables.min.css"/> -->
 


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

 


</head>

<body>
  <header class="bg-primary">
    <div class="container">
      <nav class="navbar">
        <div class="container-fluid py-2">
          <a class="navbar-brand text-white">Perpustakaan Daerah</a>
          <div class="">
            <img src="asset/image/undraw_profile.svg" class="img-fluid img-profile" alt="...">
            <span class="me-3 text-white"><?php echo $_SESSION['nama_petugas']; ?></span>
            <a href="proses/logout.php" class="text-white text-decoration-none link-dark ">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Logout
            </a>
          </div>
        </div>
      </nav>

      <nav class="navbar bg-light shadow bg-body rounded">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link text-secondary link-primary" aria-current="page" href="beranda.php">
                <i class="fas fa-regular fa-house bg-white"></i>
                <span>Dashboard</span></a>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-secondary link-primary" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-database"></i>
                <span>Master Data</span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">
                    <i class="fas fa-regular fa-book me-1" style="width: 20px;"></i>
                    <span>Katalog Buku</span>
                  </a></li>
                <li><a class="dropdown-item" href="?page=anggota">
                  <i class="fa-solid fa-user me-1" style="width: 20px;"></i>
                    <span>Anggota</span>
                </a></li>
                <li><a class="dropdown-item" href="?page=petugas">
                  <i class="fa-solid fa-user-gear me-1" style="width: 20px;"></i>
                    <span>Petugas</span>
                </a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary link-primary" href="#">
                <i class="fa-solid fa-book-open-reader"></i>
                <span>Peminjaman</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary link-primary" href="?page=test">
                <i class="fa-solid fa-book-bookmark"></i>
                <span>Laporan</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </header>
  <main class="min-vh-100 mb-5">
    <div class="container mt-5">
      <?php      
        if (isset($_GET['page'])) {                        
          if ($_GET['page'] ==  'katalog_buku') {
            echo 'test';
          }elseif ($_GET['page'] ==  'anggota') {
            require_once 'pages/anggota.php';
          }elseif ($_GET['page'] ==  'petugas') {
            require_once 'pages/petugas.php';
          }elseif ($_GET['page'] ==  'peminjaman') {
            echo 'syalalal';
          }elseif ($_GET['page'] ==  'laporan') {
            echo 'syalalal';
          }else {
            require_once 'pages/404.php';
          }
        }else {
          require_once 'pages/dashboard.php';
        }
        
      ?>
      
    </div>
  </main>
  <footer class="footer">
    <div class="container-fluid bg-secondary bg-opacity-25">
      <p class="text-center text-secondary m-0 py-3">Copyright © <a href="https://themesbrand.com/" target="_blank" class="text-primary text-decoration-none">Sanday.</p>       
    </div>
</footer>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/fh-3.2.4/r-2.3.0/rr-1.2.8/datatables.min.js"></script>

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/fh-3.2.4/r-2.3.0/rr-1.2.8/datatables.min.js"></script> -->
 

 

</body>

</html>