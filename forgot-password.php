<!DOCTYPE html>
<?php require_once("config.php");
if(isset($_SESSION["id"])) 
{
  header("location:index.php"); 
}
?>
<html>
<head>
<title> Forgot Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="welcome-text" align="center"><H1>Welcome users</H1></div>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
 	<form action="forgot_process.php" method="POST">
    <div class="login_form">
  <div class="form-group">
 <h1> Password Reset Confirmation</h1>
 <?php if(isset($_GET['err'])){
 $err=$_GET['err'];
 echo '<p class="errmsg">No user found. </p>';
} 
// If server error 
if(isset($_GET['servererr'])){ 
echo "<p class='errmsg'>The server failed to send the message. Please try again later.</p>";
   }
   //if other issues 
   if(isset($_GET['somethingwrong'])){ 
 echo '<p class="errmsg">Something went wrong.  </p>';
   }
// If Success | Link sent 
if(isset($_GET['sent'])){
echo "<div class='successmsg'>Reset Link Has been sent to Your registered Email Id . </div>"; 
  }
  ?>
  <?php if(!isset($_GET['sent'])){ ?>
    <input type="text" name="login_var" value="<?php if(!empty($err)){ echo  $err; } ?>" class="form-control" placeholder="Username or Email" required="">
  </div>
  <button type="submit" name="subforgot" class="btn btn-primary btn-group-lg form_btn">Send Link </button>
  <?php } ?>
</div>
</form>
   <br> 
   <p>Have an account? <a href="login.php">Login</a> </p>
    <p>Don't have an account? <a href="register.php">Sign up</a> </p> 
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
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
  margin: auto;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button{
   background-color: red;
  color: white;
  margin: auto;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button a{
    text-decoration: none;
    color: white;
}
input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  margin-top: 80px;
  width: 60%;
  margin:auto;
  text-align: center;
  border-radius: 5px;
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