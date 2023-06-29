<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include ('../inc/connect.php');

$username = $_POST['username'];
$password = md5(trim($_POST['password']));
$upassword = md5(trim($_POST['upassword']));

if(isset($_POST['register'])){
  if ($password != $upassword){
    echo "<script>
            alert('Konfirmasi password tidak sesuai');
        </script>";
        return;
  }
  else if($username != '' && $password != ''){
      $sql = "INSERT INTO user (username, password) VALUES ('$username', 
      '$password')";
      $hasil= mysqli_query($kon, $sql);

  if($hasil){
        header("Location: login.php");
      }else{
        header("Location: register.php");
      }
  }
}
?>