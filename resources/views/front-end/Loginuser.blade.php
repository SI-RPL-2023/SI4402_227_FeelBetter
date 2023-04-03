<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEELBETTER</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
  crossorigin="anonymous"
></script>
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<?php
        if (isset($_SESSION["keluar"])){
            ?>
            <div class="alert alert-success alert-dismissible fade show" id="alertkeluar">
                Berhasil logout
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            session_destroy();
            }
        ?>

        <div class="alert alert-success alert-dismissible fade show" id="alertberhasil">
            Berhasil registrasi
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <script>
            var berhasil = document.getElementById('alertberhasil');
            berhasil.style.display = 'none'
        </script>

        <?php
        if (isset($_SESSION["sukses"])){
            echo "
            <script>
                berhasil.style.display = 'block'
            </script>
            ";
            session_destroy();
        }
        ?>

        <div class="alert alert-danger alert-dismissible fade show" id="alertgagal">
            Gagal Login
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <section class="vh-50" style="background-color: #86A3B8;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://i.pinimg.com/564x/d5/66/54/d56654b03f0afc8f661852e4923f0809.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="../config/loginuser.php" method="post" enctype="multipart/form-data">
      
                        <div class="d-flex align-items-center pb-0">
                          <i class="fas fa-cubes fa-2x" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold">Hello Good People!</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account.</h5>
      
                        <div class="form-outline mb-2">
                        <label class="form-label" for="email">Email</label>
                          <input type="text" name="email" id="email" required class="form-control form-control-lg" />
                        </div>
      
                        <div class="form-outline mb-4">
                        <label class="form-label" for="pass">Password</label>
                          <input type="Password" name="pass" id="pass" required class="form-control form-control-lg" /> 
                        </div>
      
                        <div class="pt-0 mb-2">
                          <a href="DashboardUser.php">
                          <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit" onclick="">Login</button>
                          </a>
                        </div>
                      </form>
                          <p class="mb-5 pb-lg-2" style="color: #393f81;">Do not have an account yet? <a href="SignUp.php"
                            style="color: #blue;">Click here to register now!</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          
    <footer>
        <!-- Button trigger modal -->
    <CENTER>
      <button type="button" class="btn btn-ligth" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Copyright 2022 (RPL227)
      </button>
    </CENTER>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Copyright</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <P>RPL227
          </P>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </footer>
              
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            var gagal = document.getElementById('alertgagal');
            gagal.style.display = 'none'
        </script>
</body>
</html>