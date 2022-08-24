<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Login</title>  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/style/style.css">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-light">
<div class="postion-relative">
  <div class="container position-absolute top-50 start-50 translate-middle">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block rounded-start" style="background-image: url(asset/image/image\ 1.png);  background-size: cover; overflow: hidden; background-position: -25px;"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="d-flex">
                    <img src="asset/image/logo.png" width="40%" alt="logo" srcset="">
                    <div class="d-flex flex-column">
                      <h2>Perpustakaan</h2>
                      <h2 class="text-center">Daerah</h2>
                    </div>
                  </div>
                  <hr>                  
                  <form action="proses/proses_login.php" class="needs-validation" novalidate id="validasi" method="post">
                    <div class="mb-3 mt-3">
                      <label for="uname" class="form-label">Username:</label>
                      <input type="text" class="form-control" id="uname" placeholder="Enter username" required
                        name="uname">
                      <div class="invalid-feedback">Username tidak boleh kosong.</div>
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                        required>
                      <div class="invalid-feedback">Password tidak boleh kosong.</div>
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="myCheck" name="remember">
                        <label class="form-label" for="myCheck">Remember me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 ">Log in</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>


<script>       
  const form = document.getElementById('validasi')
  
  form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
        e.preventDefault()              
    }
    form.classList.add('was-validated')
  })
</script>
</body>

</html>