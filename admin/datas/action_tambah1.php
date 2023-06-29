<?php
include '../inc/connect.php';

$judul_anime = $_POST['judul_anime'];
$waktu_rilis = $_POST['waktu_rilis'];



if(isset($_POST['ajukan'])){
    $sql  = "INSERT INTO jadwal_rilis (judul_anime, waktu_rilis) values ('$judul_anime','$waktu_rilis')  ";
    mysqli_query($kon,$sql);
  
    echo '<script language="javascript"> location.href ="'.$base_url.'/data-anime1"; </script>';
    return;
  
  
  }
  

?>
