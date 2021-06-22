<?php include_once 'open.php'; ?>
<!DOCTYPE html>
<?
if (isset($_SESSION['id'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<div class="welcome-text" align="center"><H1>Welcome users</H1></div>
	<div class="main">
		<h1>Registration and Login System</h1>
        
		<div class="register">
			<form name="registration" method="post" action="" enctype="multipart/form-data">
				
				<input type="text" class="text" value="" name="fname" placeholder="First Name" required>
				
				<input type="text" class="text" value="" name="lname" placeholder="Last Name" required>
				
				<input type="text" class="text" value="" placeholder="Enter email address" name="email">
				
				<input type="password" value="" name="password" placeholder="Password" required>
				
				<input type="text" value="" name="contact" placeholder="Contact" required>
				<div class="sign-up">
					<input type="reset" value="Reset">
					<input type="submit" name="signup" value="Sign Up">
					<p>Have an account? <a href="login.php">Login</a> </p>
					<div class="clear"> </div>
				</div>
			</form>

		</div>



	</div>
	 </body>
<style>

input[type=text],input[type=password] {
	width: 50%; 
  margin: auto;
  padding: 12px; 
  border: 1px solid #ccc;
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  margin-top: 10px;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset]{
	background-color: red;
  color: white;
  margin-top: 10px;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
} 
button{
   background-color: red;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
}
button a{
    text-decoration: none;
	
    color: white;
}
input[type=submit]:hover {
  background-color: #45a049;
}

.main {
  width: 60%;
  margin:auto;
  border-radius: 15px;
  text-align: center;
  background-color: #f2f2f2;
  padding: 20px;
}
.login h3{
    color: blueviolet;
    background-color: #f2f2f2;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 600;
}
</style>
</html>
