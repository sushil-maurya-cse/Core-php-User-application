<?php
require_once("config.php");
if (isset($_POST['subforgot'])) {
    $login = $_REQUEST['login_var'];
    echo $login;
    $query = "select * from  users where (fname='$login' OR email = '$login')";
    $res = mysqli_query($con, $query);
    $result = mysqli_fetch_assoc($res);
    if ($result) {
        $findresult = mysqli_query($con, "SELECT * FROM users WHERE (fname='$login' OR email = '$login')");
        if ($res = mysqli_fetch_assoc($findresult)) {
            $oldftemail = $res['email'];
            echo "$oldftemail";
        }
        else{
            echo "unable to fetch email ";
        }
        $token = bin2hex(random_bytes(50));
        $inresult = mysqli_query($con, "insert into pass_reset values('','$oldftemail','$token')");
        if ($inresult) {

            $email = $oldftemail;
            $subject = "Reset password link";
            $token = $token;
            $message = "Your password reset link <br> http://localhost/laginn/loginsystem/password-reset.php?token=" . $token . " <br> Reset your password with this link .Click or open in new tab<br><br> <br> <br>";
            // mail($email, $subject, $message, "From: $email");
            if (mail($email, $subject, $message, "From: $email")) {
                echo "Email successfully sent to $email...";
                header("location:forgot-password.php?sent=1");
                $hide = '1';
            } else {
                echo "Email sending failed...";
                header("location:forgot-password.php?servererr=1");
            }
            //echo  "<script>alert('Your Password has been sent Successfully');</script>";
            
        } else {
            echo "<script>alert('Email not register with us');</script>";
            echo "$oldftemail";
            header("location:forgot-password.php?something_wrong=1");
        }
    }
}
?>
