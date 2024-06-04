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
		  <h3>Login User</h3>
		  <form action="login-proses_user.php" method="post">
          <input class="input" type="text" name="username"
					placeholder="Username" id="username" />
		    <input class="input" type="password" name="password"
				      placeholder="Password" id="password" />	
  		    <button type="submit" class="btn_login"
				id="register">
				Login
		    </button>
            <a type="submit" class="btn_login" href="register.php"
				id="register">
				Register User
</a>
			<a type="submit" class="btn_login" href="login.php"
				id="register">
				Login Admin
</a>
		  </form>
	     </div>
	   </div>
	</main>
	<footer>
	  <h4>&copy; Lab Pemrograman Komputer 2023</h4>
	</footer>
   </div>
   <script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</body>
</html>
