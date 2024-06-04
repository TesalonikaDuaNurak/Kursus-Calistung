<?php 
include 'koneksi.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
$query = mysqli_query($koneksi, "SELECT COUNT(*) as total_admin FROM tb_admin");
$data = mysqli_fetch_assoc($query);
$total_admin = $data['total_admin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="assets/icon.png" />
  <link rel="stylesheet" href="css/admin.css" />
  <link
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CALISTUNG Admin</title>
</head>
<style>
    .card {
  background-color: #fff;
  padding: 20px;
  margin: 20px 0;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.card-content {
  text-align: center;
}

.card-content h4 {
  margin: 0;
  font-size: 1.5em;
}

.card-content p {
  margin: 0;
  font-size: 2em;
  font-weight: bold;
}
</style>
<body>
	<div class="home-content">
	 </div>	 
  <div class="sidebar">
     <div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">CALISTUNG</span>
     </div>
	<ul class="nav-links">
	   <li>
		<a href="dashboardadmin1.php" class="active">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Dashboard</span>
		</a>
	   </li>
	   <li>
		<a href="admin1.php">
		   <i class="bx bx-box"></i>
		   <span class="links_name">Admin</span>
		</a>
	   </li>
	   <li>
	      <a href="user.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Pendaftar</span>
		</a>
	   </li>
       <li>
	      <a href="paket.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Paket</span>
		</a>
	   </li>
       <li>
	      <a href="pembayaran1.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Pembayaran</span>
		</a>
	   </li>
	   <li>
		<a href="logout.php">
		   <i class="bx bx-log-out"></i>
		   <span class="links_name">Log out</span>
		</a>
	   </li>
	</ul>
   </div>
   <section class="home-section">
	<nav>
	   <div class="sidebar-button">
		<i class="bx bx-menu sidebarBtn"></i>
	   </div>
	   <div class="profile-details">
	      <span class="admin_name">CALISTUNG Admin</span>
	   </div>
	</nav>
	<div class="home-content">
  <h2 id="text">
    <?php echo $_SESSION['username']; ?>
  </h2>
  <h3 id="date"></h3>
  <div class="card">
    <div class="card-content">
      <h4>Jumlah Admin</h4>
      <p><?php echo $total_admin; ?></p>
    </div>
  </div>
</div>


		
   </section>
   <script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};

		function myFunction() {
			const months = ["Januari", "Februari", "Maret", "April", "Mei",
				"Juni", "Juli", "Agustus", "September",
				"Oktober", "November", "Desember"
			];
			const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
				"Jumat", "Sabtu"
			];
			let date = new Date();
			jam = date.getHours();
			tanggal = date.getDate();
			hari = days[date.getDay()];
			bulan = months[date.getMonth()];
			tahun = date.getFullYear();
			let m = date.getMinutes();
			let s = date.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
			requestAnimationFrame(myFunction);
		}

		function checkTime(i) {
			if (i < 10) {
				i = "0" + i;
			}
			return i;
		}
		window.onload = function() {
			let date = new Date();
			jam = date.getHours();
			if (jam >= 4 && jam <= 10) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi,");
			} else if (jam >= 11 && jam <= 14) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang,");
			} else if (jam >= 15 && jam <= 18) {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore,");
			} else {
				document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam,");
			}
			myFunction();
		};

   </script>
</body>
</html>
