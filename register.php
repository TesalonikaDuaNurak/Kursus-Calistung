<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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
		  <li><a href="index.php">Home</a></li>
		  <li><a href="#">Categories</a></li>
		  <li><a href="login.php">Login</a></li>
		</ul>
	   </nav>
      </header>
	<main>
  	  <div class="center">
	     <div class="form-login">
		  <h3>Register</h3>
		  <form action="register-proses.php" method="post">
		  <input class="input" type="text" name="id"
					placeholder="ID Pendaftar" />
		    <input class="input" type="text" name="nama"
					placeholder="Nama Pendaftar" />
					<input type="text" name="alamat" class="input" placeholder="Alamat Pendaftar">
					<input class="input" type="text" name="hp"
					placeholder="No Hp Pendaftar" />
					<input class="input" type="text" name="bank"
					placeholder="Bank Pendaftar" />
					<input class="input" type="text" name="rek"
					placeholder="No Rekening Bank Pendaftar" />
		    <input class="input" type="text" name="username"
					placeholder="Username"/>
		    <input class="input" type="password" name="password"
				      placeholder="Password" />
  		    <button type="submit" class="btn_login" name="register"
				id="register">
				Register
		    </button>
		  </form>
	     </div>
	   </div>
	</main>
	<footer>
	  <h4>&copy; Lab Pemrograman Komputer 2023</h4>
	</footer>
   </div>
</body>
</html>
