<?php 
include 'koneksi.php';
 
$username = $_POST['email'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"select * from tb_admin where email='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboardadmin1.php");
}else{
	header("location:login.php");	
}
 
?>