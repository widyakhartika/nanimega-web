<?php
include('../inc/connect.php');

$id_anime = $_POST['id_anime'];
$judul_anime = $_POST['judul_anime'];
$tahun_rilis = $_POST['tahun_rilis'];
$deskripsi = $_POST['deskripsi'];
$genre = $_POST['genre'];
$total_episode = $_POST['total_episode'];
$status_anime = $_POST['status_anime'];
$link = $_POST['link'];


$foto_anime  = $_FILES['foto_anime']['name'];
$foto_tmp  = $_FILES['foto_anime']['tmp_name'];
$foto_size = $_FILES['foto_anime']['size'];

$update_foto 	= date('dmYHis')."-Anime-".$foto_anime;


if(isset($_POST['ajukan'])){
/*$sql ="UPDATE data_anime SET judul_anime='$judul_anime' , tahun_rilis='$tahun_rilis', genre='$genre',
total_episode='$total_episode', status_anime='$status_anime' WHERE id_anime='$id_anime' ";

mysqli_query($kon,$sql);

echo '<script language="javascript"> location.href ="'.$base_url.'/data-infoanime"; </script>';
  return;
}

else

{

}*/
if (!empty($foto_anime))
    {

    //remove old photo first
    $sql_foto    = "SELECT * from data_anime where id_anime='$id_anime' ";
    $result_foto = mysqli_query($kon,$sql_foto);
    $data_foto   = mysqli_fetch_array($result_foto);

    #path
    $path = $_SERVER['DOCUMENT_ROOT'] . '/admin_animeweb/admin/assets/image/'.$data_foto['foto_anime'];
    //echo "hasil: ".$path;
    chmod($path,777);
   


    //update database
    $sql ="UPDATE data_anime SET judul_anime='$judul_anime' , tahun_rilis='$tahun_rilis', deskripsi='$deskripsi', genre='$genre',
total_episode='$total_episode', status_anime='$status_anime',link='$link', foto_anime='$update_foto' WHERE id_anime='$id_anime' ";

    
    mysqli_query($kon,$sql);


    //upload to folder
    $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/admin_animeweb/admin/assets/image/';
    move_uploaded_file($_FILES['foto_anime']['tmp_name'], $uploadfile . $update_foto);
    //echo $uploadfile.$new_photo;

    }

    else
    {

      $sql ="UPDATE data_anime SET judul_anime='$judul_anime' , tahun_rilis='$tahun_rilis', deskripsi='$deskripsi', genre='$genre',
      total_episode='$total_episode', status_anime='$status_anime',link='$link' WHERE id_anime='$id_anime' ";
    
    mysqli_query($kon,$sql);


    }



echo '<script language="javascript"> location.href ="'.$base_url.'/data-infoanime/message/successedit"; </script>';
  return;
}

else

{

}

?>