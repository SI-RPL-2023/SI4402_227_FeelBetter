<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>FEEL BETTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Custom CSS -->
    <link href="../css/css/style.min.css" rel="stylesheet">
        

<style type="text/css">
.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:500px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}

.summary{
    background-color: #FF9494;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 3vh;
    color: rgb(65, 65, 65);
}
.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 0 10px #E8E8E8 inset;
    height: 40px;
    margin: 0 0 0 0px;
    padding: 8px;
    width: 210px;
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.round {
	margin-top: -30px;
    margin-bottom: 10px;
    border-radius: 50%;
    overflow: hidden;
    width: 150px;
    height: 150px;
	border:2px solid white;
    align:"center";
    }
.round img {
    display: block;
    min-width: 100%;
    min-height: 100%;
    align:"center";
}
</style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav"></div>
        <a href="https://www.instagram.com" style="border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
      </a>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="">Home</a></li>
                    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>  
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#Customer">Profile</a></li>
                        <li><a class="dropdown-item" href="">Transaksi</a></li>
                        <li><a class="dropdown-item" href="">Log Out</a></li>
                    </ul>
                </li>
             </ul>
        
    </nav>


           <div class="row">
                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Daftar Pasien</h4>
                                        <h5 class="card-subtitle">Identitas Pasien Feel Better Anda!</h5>
                                    </div>
                                    <div class="ms-auto">
                                        
                                    </div>
                                </div>
                        <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Nama</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">No. Telepon</th>
                                                <th class="border-top-0"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <?php
                                                        
                                                        ?>
                                                                                        
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16"></h4>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                <div class="">
                                                    <h4 class="m-b-0 font-16"></h4>
                                                </div>
                                                </td>
                                        
                                                <td>
                                                <div class="">
                                                    <h4 class="m-b-0 font-16"></h4>
                                                </div>
                                                </td>
                                                <td>
                                                <a href="../config/delete1.php?id=<?php echo $data["id"]; ?>" button type="button" class="btn btn-danger"
                                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                    <div class="text-light">Batalkan</div>
                                                </button> 
                                                </td>
                                             <?php
                                            ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                   
                                </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                        <div class="card summary">
                        <div class="card-body">
                            <div class="card-body little-profile text-center">
                                <div class="round">
                                <img src="https://i.pinimg.com/564x/24/d1/93/24d19367bf659c3a183a27e4a31de19e.jpg"/>
                                </div>
                                <h3 class="m-b-1">Dewi Terapis</h3>
                                <p>Dewiterapis@gmail.com | ID: 12-0220-4242</p>
                                </div>
                                <a href="LoginUser.php">
                                <center><button class="btn btn-dark" type="submit"  style="--bs-btn-padding-y: .75rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Log Out</button></center>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            

                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Riwayat Pemesanan Terapi</h4>
                                        <h5 class="card-subtitle">Cek Riwayat Pemesanan Terapi oleh Pasien Kamu Di Sini!</h5>
                                    </div>
                                    <div class="ms-auto">
                                        
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover align-middle text-nowrap">
                                                        <?php
                                                            $connect = mysqli_connect("localhost: 3308", "root", "", "adorableflorist");
                                                            $query = "SELECT * FROM tabel_order";
                                                            $result = mysqli_query($connect, $query);
                                                            if($query){
                                                                while($data = mysqli_fetch_assoc($result)){ 
                                                    ?>
                                            <form action='../config/update.php?id=<?php echo $data['id_order'];?>' method='POST' enctype="multipart/form-data">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Nama Pasien</th>
                                                    <th class="border-top-0">No. Telepon</th>
                                                    <th class="border-top-0">Alamat</th>
                                                    <th class="border-top-0">Nama Terapi</th>
                                                    <th class="border-top-0">Harga</th>
                                                    <th class="border-top-0">Payment</th>
                                                    <th class="border-top-0">Status Pemesanan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                        <div class="d-flex align-items-center">
                                                    <td>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"></h4>
                                                    </div>
                                                    </td>

                                                    <td>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"></h4>
                                                    </div>
                                                    </td>
                                            
                                                    <td>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"></h4>
                                                    </div>
                                                    </td>

                                                    <td>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"></h4>
                                                    </div>
                                                    </td>

                                                    <td>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"></h4>
                                                    </div>
                                                    </td>

                                                    <td>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"></h4>
                                                    </div>
                                                    </td>

                                                    <td action="">
                                                
                                                    <select name="status_order">
                                                    <option name='status_order' value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                                    <option name='status_order' value="Terima Pesanan">Konfirmasi Pesanan</option>
                                                    <option name='status_order' value="Pesanan Ditolak">Pemesanan Ditolak</option>
                                                    </select></td> 
                                                    <td action="" method="POST">
                                                    
                                                    <button type="submit" class="btn btn-primary"
                                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                        Update
                                                    </button>   
                                                    </td>
                                                </tr>
                                                <?php }
                                                        }
            
                                                ?>
                                                </tr>
                                            </tbody>
                                        </from>
                                        </table>
                                    
                                    </div>
                        </div>
                    </div>
                </div>
                
            </div>
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
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>