<?php
require_once('dbconnection.php');
session_start();
extract($_POST);


if (isset($_POST['update-bio'])) {
    $bio = $_POST['bio'];
    $bio_id = $_SESSION['id'];
    $msg = mysqli_query($con, "UPDATE `users` SET `bio` = '$bio' WHERE `users`.`id` = $bio_id");
    if ($msg) {
        header('Location:index.php');
    }
} else if ($_POST['crudOperation'] == "saveData") {
    $co_id = $_SESSION['id'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $countryVal = $_POST['countryVal'];
    $stateVal = $_POST['stateVal'];
    $cityVal = $_POST['cityVal'];
    $msg = mysqli_query($con, "UPDATE `users` SET `country` = '$country', `state` = '$state', `city` = '$city', `cval` = '$countryVal', `sval` = '$stateVal', `cyval` = '$cityVal' WHERE `users`.`id` = $co_id");
    if ($msg) {
        header('Location:index.php');
        
    }echo "saved" ;
} else if (isset($_POST['submit'])) {
    $old_image = $_POST['oldphoto'];
    $img_id = $_SESSION['id'];
    $image = $_FILES['photo'];
    $filename = $image['name'];
    $filepath = $image['tmp_name'];
    $fileerror = $image['error'];
    if ($filepath != '') {
        if ($fileerror == 0) {
            $dest_file = 'uploads/' . $filename;
            if (move_uploaded_file($filepath, $dest_file)) {
                echo "<script>alert('Yes');</script>";
                header('Location:index.php');


                $query = "UPDATE `users` SET `pic` = '$dest_file' WHERE `users`.`id` = $img_id";
                $sql = mysqli_query($con, $query);
            } else {
                echo "<script>alert('No image Selected');</script>";
                header('Location:index.php');
            }
        } else {
            $query = "UPDATE `users` SET `pic` = '$old_image' WHERE `users`.`id` = $img_id";
            $sql = mysqli_query($con, $query);
        }
    } else {
        echo "<script>alert('No File Found/selected');</script>";
        header('Location:index.php');
    }
}
