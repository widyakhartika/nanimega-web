<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include ('../inc/connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Akun</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/image/logo_anime.png" />

</head>

<body class="bg-gradient-light">
    
    <div class="container">

    <center>

    <div class="col-sm-5">
        <div class="card o-hidden border-0 shadow-lg my-5 bg-gray-200">
           
                <!-- Nested Row within Card Body -->
                
                        <div class="p-4">
                            <div class="text-center">
                            <img src="../assets/image/logo_anime.png" alt="logo" class="img-fluid"/>
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
                            </div>
                            <div class="form">
                            <form action="action_regist.php" method="POST" id="register">
                                <div class="form-group">
                                    
                                <input type="text" class="form-control form-control-user" aria-describedby="usernameHelp"  name="username"
                                             placeholder="Username kamu..." autofocus required>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                           name="password" placeholder="Password..." required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                           name="upassword" placeholder="Ulang Password..." required>
                                    </div>
                             
                                    
                                </div>
                                <input class="btn btn-primary btn-user btn-block" name="register"
                                type="submit" value="Daftarkan Akun">
                              
                            </form>
                         
                            <hr>
                            
                            <div class="text-center">
                                <a class="small" href="../login/login.php">Sudah punya akun? Masuk!</a>
                            </div>
                            </div>
                        </div>
                    </div>
            
                   
        </div>
        </center>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>
	
</body>

</html>