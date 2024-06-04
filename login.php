<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
		  <li><a href="login.php">Login</a></li>
		</ul>
	   </nav>
      </header>
	<main>
  	  <div class="center">
	     <div class="form-login">
		  <h3>Login</h3>
		  <form action="login-proses.php" method="post">
		    <input class="input" type="email" name="email"
					placeholder="Email" />
		    <input class="input" type="password" name="password"
				      placeholder="Password" />
  		    <button type="submit" class="btn_login"
				id="register">
				Login
		    </button>
			<a type="submit" class="btn_login" href="loginuser.php"
				id="register">
				Login User
</a>
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
