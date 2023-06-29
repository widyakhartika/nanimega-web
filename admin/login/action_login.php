<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

session_start();
include ('../inc/connect.php');

$username	= $_POST['username'];
$password	= md5(trim($_POST['password']));

$sql		= "select  * from user where username='$username' and password='$password' ";
$sql_login	= mysqli_query($kon,$sql) ;
$hasil 		= mysqli_fetch_array($sql_login);

$username 	= $hasil['username'];


if(mysqli_num_rows($sql_login) == 1) {

	$_SESSION['username'] = $username;
	$_SESSION['login'] = true;
	?>
	<script language ="javascript">location.href ="../index.php"; </script>
	<?php
	
	}
	 else {
	
	?>
	
	 <script language ="javascript">location.href ="../login/login.php?msg=error"; </script>
	 
	 
	 <?php
	
	}
	
	?>
	