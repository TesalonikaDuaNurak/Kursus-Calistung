<?php 
include 'koneksi.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
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
			<table class="table table-bordered">
            <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pendaftar</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Hp</th>
      <th scope="col">Bank Pendaftar</th>
      <th scope="col">No Rekening Bank Pendaftar</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_user");
		while($d = mysqli_fetch_array($data)){
			?>
    <tr>
    <td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['bank']; ?></td>
				<td><?php echo $d['no_rek']; ?></td>
				<td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['status'] == 1 ? 'Aktif' : 'Tidak Aktif'; ?></td>
				<td>
					<a href="hapus_user.php?id=<?php echo $d['id_user']; ?>" class="btn btn-danger">HAPUS</a>
				</td>
</tr>
<?php } ?>
</tbody>
            </table>
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
