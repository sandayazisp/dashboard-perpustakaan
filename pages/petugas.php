 <!-- section input petugas start -->
 <section class="shadow pt-4 pb-5 px-5 rounded">
     <h1 class="text-center text-uppercase text-decoration-underline">Data Petugas</h1>
     <!-- Button trigger modal -->
     <a href="#" class="btn btn-primary btn-icon-split p-0 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
         <span class="icon text-white-50"
             style="background: rgba(0,0,0,.15);display: inline-block; padding: 0.375rem 0.75rem;">
             <i class="fa-solid fa-plus text-white"></i>
             <!-- <i class="fa-solid fa-circle-plus text-white"></i> -->
         </span>
         <span class="text px-2">Data Petugas</span>
     </a>

     <!-- modal input data -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Input Data Petugas</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <form action="proses/proses_inputAnggota.php" method="post">
                     <div class="modal-body">
                         <div class="form-floating mb-3">
                             <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="sanday"
                                 required>
                             <label for="floatingInput">Nama Petugas</label>
                         </div>
                         <div class="form-floating mb-3">
                             <input type="text" class="form-control" id="floatingInput" name="username" placeholder="sanday"
                                 required>
                             <label for="floatingInput">Username</label>
                         </div>
                         <div class="form-floating mb-3">
                             <input type="password" class="form-control" id="floatingInput" name="pass" placeholder="sanday"
                                 required>
                             <label for="floatingInput">Password</label>
                         </div>
                         <div class="form-floating mb-3">
                             <select class="form-select" id="floatingSelect" aria-label="Pilih jenis kelamin" name="status">
                                 <option selected>~ Pilih Status ~</option>
                                 <option value="Admin">Admin</option>
                                 <option value="Karyawan">Karyawan</option>
                             </select>
                             <label for="floatingSelect">Status</label>
                         </div>
                         <div class="form-floating mb-3">
                             <select class="form-select" id="floatingSelect" aria-label="Pilih jenis kelamin" name="jk">
                                 <option selected>~ Pilih Jenis Kelamin ~</option>
                                 <option value="Laki - Laki">Laki - Laki</option>
                                 <option value="Perempuan">Perempuan</option>
                             </select>
                             <label for="floatingSelect">Jenis Kelamin</label>
                         </div>
                         <div class="form-floating mb-3">
                             <input type="number" class="form-control" id="floatingInput" name="telp_anggota"
                                 placeholder="nomer telp" required>
                             <label for="floatingInput">No. Telp. Petugas</label>
                         </div>
                         <div class="form-floating mb-3">
                             <textarea class="form-control" placeholder="Alamat" name="alamat" id="floatingTextarea2"
                                 required style="height: 100px"></textarea>
                             <label for="floatingTextarea2">Alamat</label>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                         <button type="submit" class="btn btn-primary">Tambah Data</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <div class="table-responsive shadow">
         <table class="table table-striped table-bordered">
             <thead>
                 <tr>
                     <th scope="col">#NO</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Jenis Kelamin</th>
                     <th scope="col">No. Telp</th>
                     <th scope="col">Alamat</th>
                     <th scope="col">Action</th>
                 </tr>
             </thead>
             <tbody>
                 <?php 
                    include 'config/db.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from anggota");
                    while($d = mysqli_fetch_array($data)){                        
                        ?>
                 <tr>
                     <th scope="row"><?php echo $no++; ?></th>
                     <td><?php echo $d['nama_anggota']; ?></td>
                     <td><?php echo $d['jk_anggota']; ?></td>
                     <td><?php echo $d['telp_anggota']; ?></td>
                     <td><?php echo $d['alamat_anggota']; ?></td>
                     <td>
                         <!-- <a href="?page=id_anggota=<?php echo $d['id_anggota']; ?>" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modalEdit" >EDIT</a>   
                                    -->
                                    
                         <button  class="btn btn-warning text-white" onclick="editData('<?= $d['nama_anggota'] ?>', '<?= $d['jk_anggota']  ?>', '<?= $d['telp_anggota']  ?>', '<?= $d['alamat_anggota']  ?>', <?= $d['id_anggota']  ?>)">Edit</button>     
                         
                         <button type="button" class="btn btn-primary" onClick="confirmationDelete(<?= $d['id_anggota'] ?>)" >
                            Hapus
                        </button>
                         <!-- <a href="proses/proses_deleteAnggota.php?id_anggota=<?php echo $d['id_anggota']; ?>" class="btn btn-primary">HAPUS</a>                                                             -->
                                                  
                         <!-- Modal Edit data -->
                         <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditLabel">Edit Data Petugas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                                                                                           
                                    <form action="proses/proses_updateAnggota.php" method="post">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama_anggota" class="form-label">Nama Petugas</label>
                                                <input type="text" class="form-control" id="nama_anggota" name="nama" placeholder="Input Nama Petugas">
                                              </div>                                              
                                              <div class="mb-3">
                                                <select class="form-select" aria-label="Pilih Jenis Kelamin" name="jk" >
                                                    <option selected id="jk_anggota" ></option>                                                  
                                                    <option value="Laki - Laki" >Laki - Laki</option>
                                                    <option value="Perempuan" >Perempuan</option>n>
                                                  </select>
                                              </div>
                                              <div class="mb-3">
                                                <label for="telp_anggota" class="form-label">No. Telp. Petugas</label>
                                                <input type="number" class="form-control" id="telp_anggota" name="telp_anggota" placeholder="Another input placeholder">
                                              </div>
                                              <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                              </div>
                                              <input type="text" class="form-control" id="id_anggota" name="id_anggota" hidden>                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Update Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                         

                         <!-- Modal Hapus Petugas -->
                         <div class="modal fade" id="hapusAnggota" tabindex="-1" aria-labelledby="hapusAnggotaLabel"
                             aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="hapusAnggotaLabel">Hapus Data</h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                     </div>
                                     <div class="modal-body">
                                         Apakah data anggota mau di hapus??
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary"
                                             data-bs-dismiss="modal">Close</button>
                                        <a class="btn btn-primary" id='hapus'>HAPUS</a>                                         
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </td>
                 </tr>
                 <?php 
                    }
                    ?>
             </tbody>
         </table>
     </div>
 </section>
 <!-- section input anggota end -->

 <script>
    function editData(nama, jk_anggota, telp_anggota, alamat_anggota, id_anggota) {
        // console.log(alamat_anggota);
        const myModal = new bootstrap.Modal(document.getElementById('modalEdit'))
        let nama_anggota = document.getElementById('nama_anggota');        
        nama_anggota.value = nama;
        let jk_anggotas = document.getElementById('jk_anggota');        
        jk_anggotas.value = jk_anggota;
        jk_anggotas.innerText = jk_anggotas.value;        
        let telp_anggotas = document.getElementById('telp_anggota');                
        telp_anggotas.value = telp_anggota;
        let alamat_anggotas = document.getElementById('alamat');        
        alamat_anggotas.value = alamat_anggota;
        let id_anggotas = document.getElementById('id_anggota');        
        id_anggotas.value = id_anggota;
        myModal.show();                
    }

    function confirmationDelete(id_anggota) {
    const myModal = new bootstrap.Modal(document.getElementById('hapusAnggota'))
    let hapus = document.getElementById('hapus');
    hapus.setAttribute('href', `proses/proses_deleteAnggota.php?id_anggota=${id_anggota}`)
    myModal.show();       
  
    }

</script>

