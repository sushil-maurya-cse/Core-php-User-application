<?php
include 'conn.php';
error_reporting(0);

$nameb = $_GET['nameb'];
$ageb = $_GET['ageb'];
$skillb = $_GET['skillb'];
$designationb = $_GET['designationb'];
$addressb = $_GET['addressb'];
$imageb=$_FILES['imageb'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>PHP Form</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <?php echo "$imageb"?>
      <!-- <?php
  //   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  //     $name = $_POST['name'];
  //     $age = $_POST['age'];
  //     $skill = $_POST['skill'];
  //     $designation = $_POST['designation'];
  //     $address = $_POST['address'];

    
  //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //     <strong>Success!</strong> Your name ' . $name.' and age '. $age.' has been submitted successfully!
  //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //       <span aria-hidden="true">×</span>
  //     </button>
  //   </div>';
  //   // Submit these to a database
  // }
    
?> -->
    <div class="container my-4">
        <form  method='POST'>
        <input type="hidden" name="sno" id="sno">
        <div class="form-group">
              <label for="formGroupExampleInput">name</label>
              <input type="text" class="form-control" name="name" value="<?php echo "$nameb" ?>" id="formGroupExampleInput"  placeholder="name" >
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput1">age</label>
              <input type="number" name="age" class="form-control" value="<?php echo "$ageb" ?>" id="formGroupExampleInput1" placeholder="age">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput my-5">skill</label>
            <select name="skill_id" id="formGroupExampleInput" class="form-control">
            <?php
            include 'conn.php';
            $sql="SELECT * FROM `skills`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
              echo "<option value='".$row['skill_id']."'>".$row['skill']."</option>";}
            ?>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">designation</label>
              <input type="text" name="designation" class="form-control" value="<?php echo "$designationb" ?>" id="formGroupExampleInput3" placeholder="designation">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">address</label>
              <input type="text" name="address" class="form-control" value="<?php echo "$addressb" ?>" id="formGroupExampleInput"  placeholder="Enter address">
            </div>
            <div class="form-group">
              <label for="file">Image Upload</label>
              <input type="file" name="file" value="<?php echo "$imageb" ?>" class="form-control" id="formGroupExampleInput"  required>
            </div>
        
            <button type="submit"  class="btn btn-primary">Update</button>
          
        <!-- <div class="btn">
      <button type="button" onclick="location.href = 'display.php'"  class="btn btn-primary  btn-block">SEE ALL THE ACCOUNTS</button>
    
      </div> -->
    
          </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include 'conn.php';
if(count($_POST)!=0)
{
    extract($_POST);
   extract($_GET);
   extract($_FILES);
  //  $sql="UPDATE crud SET
  //  email = '$email',
  //  password = '$password' WHERE sno =$sno";
  $name = $_POST['name'];
      $age = $_POST['age'];
      $skill_id = $_POST['skill_id'];
      $designation = $_POST['designation'];
      $address = $_POST['address'];
      // $files=$_FILES['file'];
      // // if(empty($files)){
      // //   $files=$imageb;
      // // }
      // $filename=$files['name'];
      // $fileerror=$files['error'];
      // $filetmp=$files['tmp_name'];

      // $fileext=explode('.',$filename);
      // $filecheck=strtolower(end($fileext));
      // $fileextstored=array('png','jpg','jpeg');
      // if(in_array($filecheck,$fileextstored))
      // {
      //   $destinationfile='image/'.$filename;
      //     move_uploaded_file($filetmp,$destinationfile);
      //     echo "$destinationfile";
      // }
    


      $image = $_FILES['file'];
    $filename = $image['name'];
    $filepath = $image['tmp_name'];
    $fileerror = $image['error'];

    // if ($filepath != '') {
    //     if ($fileerror == 0) {
            $dest_file = 'image/' . $filename;
            move_uploaded_file($filepath, $dest_file);

    //         $query = "UPDATE `crud_php` SET `id`=$id,`username`='$username',`nickname`='$nickname',
    //         `image`='$dest_file',`designation`='$designation',`dob`='$dob',`field`='$field',`gender`='$gender' WHERE id=$id";

    //         $sql = mysqli_query($con, $query);
    //     }
    // } 
    
        $query = "UPDATE `crud` SET
        name = '$name',
        age = '$age',
        skill_id = '$skill_id',
        designation = '$designation',
        address = '$address',
        image='$dest_file'  WHERE sno ='$sno' ";
        $sql = mysqli_query($con, $query);
    

  // $sql="UPDATE `crud` SET
  // name = '$name',
  // age = '$age',
  // skill_id = '$skill_id',
  // designation = '$designation',
  // address = '$address',
  // image='$destinationfile'  WHERE sno ='$sno' ";
  
  // $sql = $sql."";
  if($sql)
  {
    echo "successfull";
  }
else{
  echo "un";
}



        // $result = mysqli_query($conn, $sql);
    // if($result){
    //   move_uploaded_file($filetmp,$destinationfile);

    // }

    
        if($result==true){ 
            $insert = true;
        }
        
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your name ' . $name.' and age '. $destinationfile.' has been submitted successfully!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>';
    header('location:display.php');


}
?>
// <?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $name = $_POST['name'];
//   $age = $_POST['age'];
//  $skill_id=$_POST['skill_id'];
//   $designation = $_POST['designation'];
//   $address = $_POST['address'];
//   $files=$_FILES['file'];

//   $filename=$files['name'];
//   $fileerror=$files['error'];
//   $filetmp=$files['tmp_name'];

//   $fileext=explode('.',$filename);
//   $filecheck=strtolower(end($fileext));
//   $fileextstored=array('png','jpg','jpeg');
//   if(in_array($filecheck,$fileextstored))
//   {
//     $destinationfile='image/'.$filename;
//     move_uploaded_file($filetmp,$destinationfile);

//   }
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success!</strong> Your name ' . $name.' and age '. $skill_id.' has been submitted successfully!
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">×</span>
//   </button>
// </div>';
// // Submit these to a database
// }
// ?>