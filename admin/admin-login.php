<?php
    include("connection.php");

    if (isset($_POST['login'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

      $sql = "SELECT * FROM `login` WHERE username='$username' && password='$password'";
      $result = mysqli_query($conn, $sql);
	  $row = mysqli_fetch_array($result);
	  $count=mysqli_num_rows($result);
	  if($count==1){
		header("location:influencer-collab.php");
	  }
	  else{
		echo '<script> 
		    window.location.href="./admin-login.php";
		    alert("Invalid username or password")
		</script>';
	  }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Log In</title>
     <!--Fav Icon-->
	 <link rel="icon" type="image/x-icon" href="/images/icon/Fav-icon.png">
     <link rel="stylesheet" href="css/style.css" />
    
    </head>
    <style>
   

body {
    background-image: url("../images/influencer-marketing-job-concept\ \(1\).jpg");
    background-repeat: no-repeat;
    background-size: cover;
	font-family: Elephant;
}

h2 {
	color: #58BDB3;
}

/* NAVIGATION */

nav {
	position: fixed;
	top: 10px;
	left: 10px;
}

nav a {
	color: #4889C2;
	font-weight: bold;
	text-decoration: none;
	opacity: .3;
	-moz-transition: all .4s;
}

nav a:hover {
	opacity: 1;
}

nav a.focus {
	opacity: 1;
}

/* LOGIN & REGISTER FORM */

form {
	width: 280px;
	height: 260px;
	margin: 200px auto;
	background: white;
	border-radius: 3px;
	box-shadow: 0 0 10px rgba(0,0,0, .4); 
	text-align: center;
	padding-top: 1px;
}

form.register{																				/* Register form height */
	height: 420px;
}

form .text-field {																			/* Input fields; Username, Password etc. */
	border: 1px solid #a6a6a6;
	width: 230px;
	height: 40px;
	border-radius: 3px;
	margin-top: 10px;
	padding-left: 10px;
	color: #6c6c6c;
	background: #fcfcfc;
	outline: none;
}

form .text-field:focus {
	box-shadow: inset 0 0 2px rgba(0,0,0, .3);
	color: #a6a6a6;
	background: white;
}

form .button {																				/* Submit button */
	border-radius: 3px;
	border: 1px solid #000;
	box-shadow: inset 0 1px 0 #8dc2f0;
	width: 242px;
	height: 40px;
	margin-top: 20px;
	
	background: linear-gradient(bottom, #58BDB3 0%, #58BDB3 100%);
	background: -o-linear-gradient(bottom, #58BDB3 0%, #58BDB3 100%);
	background: -moz-linear-gradient(bottom, #58BDB3 0%, #58BDB3 100%);
	background: -webkit-linear-gradient(bottom, #58BDB3 0%, #58BDB3 100%);
	background: -ms-linear-gradient(bottom, #58BDB3 0%, #58BDB3 100%);
	
	cursor: pointer;
	color: white;
	font-weight: bold;
	text-shadow: 0 -1px 0 #336895;
	
	font-size: 13px;
}

form .button:hover {
	background: linear-gradient(bottom, #EBAF41 0%, #EBAF41 100%);
	background: linear-gradient(bottom,  0%, #EBAF41 100%);
	background: -o-linear-gradient(bottom, #EBAF41 0%, #EBAF41 100%);
	background: -moz-linear-gradient(bottom, #EBAF41 0%, #EBAF41 100%);
	background: -webkit-linear-gradient(bottom, #EBAF41 0%, #EBAF41 100%);
	background: -ms-linear-gradient(bottom, #EBAF41 0%, #EBAF41 100%);
}

form .button:active {
	background: linear-gradient(bottom, #58BDB3 0%, #4889C2 100%);
	background: -o-linear-gradient(bottom, #58BDB3 0%, #4889C2 100%);
	background: -moz-linear-gradient(bottom, #58BDB3 0%, #4889C2 100%);
	background: -webkit-linear-gradient(bottom, #58BDB3 0%, #4889C2 100%);
	background: -ms-linear-gradient(bottom, #58BDB3 0%, #4889C2 100%);
	
	box-shadow: inset 0 0 2px rgba(0,0,0, .3), 0 1px 0 white;
}
    </style>
    <body>
    
    
    <form action="./admin-login.php" method="POST">
    
        <h2>Admin Login</h2>
    
        <input type="text" name="username" class="text-field" placeholder="Username" />
        <input type="password" name="password" class="text-field" placeholder="Password" />
        <button input type="submit" class="button" name="login">Login</button>
    
    </form>
    
    </body>
	</html>