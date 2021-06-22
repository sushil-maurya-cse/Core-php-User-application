<!DOCTYPE html>

<?php include_once 'open.php'; ?>
<?php 
if (isset($_SESSION['id'])) {
    header("location:index.php");
}
?>
<div class="welcome-text" align="center"><H1>Welcome users</H1></div>
        <div class="login">
            <h3>Login Page</h3>
            <form name="login" action="" method="post">
                <input type="text" class="text" name="uemail" value="" placeholder="Enter your registered email"><a href="#" class=" icon email"></a>

                <input type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>

                <div class="p-container">

                    <div class="submit two">
                        <input type="submit" name="login" value="LOG IN">
                    
                        <button><a href="forgot-password.php">Forgot password</a></button>
                    </div>
                    <div class="clear">
                       New Here Please <a href="register.php">Register</a> &nbsp;!!!    
                  </div>
                </div>

            </form>
        </div>
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

.login {
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
.clear{
  font-size: 14px;
  margin-top: 20px;
  text-align: center;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

</style>