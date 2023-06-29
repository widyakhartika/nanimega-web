<?php
include '../inc/connect.php';

$judul_anime = $_POST['judul_anime'];
$tahun_rilis = $_POST['tahun_rilis'];
$genre = $_POST['genre'];
$deskripsi = $_POST['deskripsi'];
$total_episode = $_POST['total_episode'];
$status_anime = $_POST['status_anime'];
$link = $_POST['link'];

$foto_anime  = $_FILES['foto_anime']['name'];
$foto_tmp  = $_FILES['foto_anime']['tmp_name'];
$foto_size = $_FILES['foto_anime']['size'];


$foto_baru	= date('dmYHis')."-Anime-".$foto_anime;



if(isset($_POST['ajukan'])){
  $sql  = "INSERT INTO data_anime (foto_anime,judul_anime,tahun_rilis,genre,deskripsi,total_episode,status_anime,link) values ('$foto_baru','$judul_anime','$tahun_rilis','$genre','$deskripsi','$total_episode'
  ,'$status_anime','$link') ";
  mysqli_query($kon,$sql);

  $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/admin_animeweb/admin/assets/image/';
  move_uploaded_file($_FILES['foto_anime']['tmp_name'], $uploadfile . $foto_baru);

  echo '<script language="javascript"> location.href ="'.$base_url.'/data-infoanime"; </script>';
  return;


}

else

{

}

?>
