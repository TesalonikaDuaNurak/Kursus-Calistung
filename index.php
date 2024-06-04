<?php 
include 'koneksi.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:loginuser.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard User</title>
  <link rel="icon" href="assets/icon.png" />
  <link rel="stylesheet" href="css/register.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
			rel="stylesheet"/>
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="container">
	<header>
   	  <nav>
	    <div class="logo">
		<img src="Aset/images.png" alt="" />
	    </div>
		<ul>
		  <li><a href="Home.php">Home</a></li>
		  <li><a href="#">Categories</a></li>
		  <?php if($_SESSION['status'] !="login"){ ?>
            <li><a href="login.php">Login</a></li>
          <?php }else{ ?>
            <li><a href="logout.php">Logout</a></li>
          <?php } ?>
		</ul>
	   </nav>
      </header>
	<main>
  	  <div class="center">
	     <div class="form-login">
		  <h3>Selamat Datang Di CALISTUNG E-Learning, <?= htmlspecialchars($_SESSION['username']); ?></h3>
		
	     </div>
	   </div>
	</main>
	<footer>
	  <h4>&copy; Calistung 2023</h4>
	</footer>
   </div>
</body>
</html>
