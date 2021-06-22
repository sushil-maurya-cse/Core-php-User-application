<?php
require 'dbconnection.php';

$id = $_GET['edit'];
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $msg = mysqli_query($con, "UPDATE `users` SET `fname` = '$fname', `lname` = '$lname', `contactno` = '$contact' WHERE `users`.`id` = $id;");

    if ($msg) {
        echo "<script>alert('Updated');</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert('Not Updated');</script>";
        echo $fname;
    }
}

?>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h1> Update Details</h1>
            </div>
            <?php
            $query = "select * from users where id=$id";
            $sql = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($sql)) {
            ?>

                <input type="text" name="fname" value="<?php echo $row['fname']; ?>">
                <input type="text" name="lname" value="<?php echo $row['lname']; ?>">
                <input type="text" name="email" value="<?php echo $row['email']; ?>" readonly>
                <input type="text" name="contact" value="<?php echo $row['contactno']; ?>"><br>

            <?php } ?>

            <input type="submit" name="submit" value="Submit" align="right">


    </form>
</div>
<style>
    input[type=text],
    input[type=password] {
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

    button {
        background-color: red;
        color: white;
        margin: auto;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button a {
        text-decoration: none;
        color: white;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        margin-top: 80px;
        width: 60%;
        margin: auto;
        text-align: center;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .login h3 {
        color: blueviolet;
        background-color: #f2f2f2;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 600;
    }
</style>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>