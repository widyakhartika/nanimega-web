<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$msg = $_GET['msg'];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nonton  Anime - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/image/logo_anime.png" />

</head>

<body>
    <!-- Background image -->
<div style="background-image: url('https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp');"></div>
<!-- Background image -->


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-1 col-lg-6 col-md-11">

                <div class="card o-hidden border-0 shadow-lg my-4 bg-secondary ">
                    <div class="card-body p-3">
                        <!-- Nested Row within Card Body -->
                       
                            <div class="col-lg-12">
                               
                                <div class="p-5 ">
                                    <div class="text-center">
                                        <img src="../assets/image/logo_anime.png" alt="logo" class="img-fluid" style="width: 500px; height: 300px;"/>
                                        <br>
                                        <h3 class="h5 text-gray-900 mb-5">Silahkan Login Terlebih Dahulu</h3>
                                        <?php
                                        if ($msg!="")
                                        {
                                        echo '<div class="alert alert-danger" role="alert">
                                        username atau password yang anda masukan salah
                                        </div>';
                                        }
                                        else
                                        {
                                        }
                                        ?>
                                    </div>
                                    <form method="POST" action="action_login.php" id="sign_in" class="user">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" aria-describedby="usernameHelp" placeholder="Username" name="username" required autofocus/>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="password" class="form-control form-control-user " id="password" placeholder="Password" name="password" required />
                                    </div>
                                   
                                        
                                    <center>
                                        <br>
                                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block"> Masuk </button>
                                    </center>
                                       <br>
                                    </form>
                                    <hr>
                                    
                                    <br>
                                    <div class="text-center">
                                        <a class="small btn-primary" href="register.php"><b>Belum Punya Akun?</b></a>
                            
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
        function myPass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>


    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>