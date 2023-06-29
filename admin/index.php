<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include ('./inc/connect.php');

date_default_timezone_set('Asia/Makassar');

session_start();

if (isset($_SESSION['username']))
{


$target = $_GET['target'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nonton Anime</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $base_url; ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $base_url; ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>/assets/image/nanimega.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" >

        <!-- Sidebar -->
        <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <img src="<?php echo $base_url; ?>/assets/image/nanimega.png" alt="logo" class="img-fluid" style="width: 200px; height: 100px;"/>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
          
            <li <?php if($target=='' or $target=='dashboard' ){echo 'class="nav-item active"';} else{echo 'class="nav-item "';} ?>>
                <a class="nav-link" href="<?php echo $base_url ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
          

            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-white">
                Data Anime
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li <?php if($target=='data-barang' or $target=='data-anime1' ){echo 'class="nav-item active"';} else{echo 'class="nav-item"';}?> >
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Anime</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Anime:</h6>
                    
                        <a <?php if($target=='data-barang' ){echo 'class="collapse-item active"';} else{echo 'class="collapse-item "';}?>href="<?php echo $base_url?>/data-infoanime">Informasi Anime</a>
                 
                        <a <?php if($target=='data-anime1' ){echo 'class="collapse-item active"';} else{echo 'class="collapse-item "';}?>href="<?php echo $base_url?>/data-anime1">Data Anime</a>
              
                    </div>
                </div>
            </li>

            <!-- <div class="sidebar-heading text-white">
                Jadwal Rilis
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_url?>/data-jadwalrilis">
                   
                    <span>Jadwal Rilis</span>
                </a>
                
            </li> -->

            <!-- <div class="sidebar-heading text-white">
                Data Sumber Anime
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsewa12"
                    aria-expanded="true" aria-controls="collapsewa12">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Daftar sumber anime</span>
                </a>
                <div id="collapsewa12" class="collapse" aria-labelledby="headingwa12" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Aset Kelas:</h6>
                        <a class="collapse-item" href="#">Kelas 1</a>
                        <a class="collapse-item" href="#">Kelas 2</a>
                        <a class="collapse-item" href="#">Kelas 3</a>
                        <a class="collapse-item" href="#">Kelas 4</a>
                    </div>
                </div>
            </li>

            <div class="sidebar-heading text-white">
                Data History Anime
            </div> -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsewa"
                    aria-expanded="true" aria-controls="collapsewa">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data History</span>
                </a>
                <div id="collapsewa" class="collapse" aria-labelledby="headingwa" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Konfigurasi:</h6>
                        <a class="collapse-item" href="#">Konfigurasi Pengguna</a>
                    </div>
                </div>
            </li> -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         

        </ul>
        <!-- End of Sidebar -->

        
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                


            <!-- End of Main Content -->

            <!-- Footer -->
            
            
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="./login/logout.php">Ya</a>
                </div>
            </div>
        </div>
    </div>

    <?php

if($target=='dashboard' or $target==''){
include('./datas/dashboard.php'); 
}
//data
else if($target=='data-infoanime'){
include('./datas/data_infoanime.php'); 
}
else if($target=='data-anime1'){
include('datas/data_anime1.php'); 
}
else if($target=='data-tambah'){
    include('datas/data_tambah.php'); 
    }

    else if($target=='data-tambah1'){
        include('datas/data_tambah1.php'); 
        }

    else if($target=='data-edit'){
        include('datas/data_edit.php'); 
        }


}
else
{
echo'<script language="javascript"> location.href ="'.$base_url.'/login/login.php"; </script>';

}
?>
?>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo $base_url; ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo $base_url; ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo $base_url; ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo $base_url; ?>/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo $base_url; ?>/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/demo/chart-pie-demo.js"></script>

    <script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdfHtml5',
            'excelHtml5'
        ]
    } );
} );
</script>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('foto_anime');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

</body>

</html>