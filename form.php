<?php
include ("configure-form.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST["Name"];
    $address = $_POST["Address"];
    $phone_Number = $_POST["Phone_Number"];
    $gender = $_POST["Gender"];
    $age = $_POST["Age"];
    $destination = $_POST["Destination"];
    $from = $_POST["From"];
    
    $sql = "INSERT INTO `Form`(`Name`, `Address`, `Phone_Number`, `Gender`, `Age`, `Destination`, `From`) 
    VALUES ('$name','$address','$phone_Number','$gender','$age','$destination','$from')";
    $result = mysqli_query($link,$sql);
    // if($result == true){
    //     echo "submitted";
    // }
    // else{
    //     echo "error!!!";
    // }
}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="css/stylee.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

  <div class="container">
    <div class="wrapper">
    <h1 style="text-align:center">KSRTC FORM</h1>
    <div class="form">
      <form action="" method="post" class="form-group">
        <label for="">Name:</label>
        <input type="text" name="Name" class="form-control" id="">
        <label for="">Address:</label>
        <input type="text" name="Address" class="form-control" id="">
        <label for="">Age:</label>
        <input type="number" name="Age" class="form-control" id="">
        <label for="">Phone Number:</label>
        <input type="tel" name="Phone_Number" class="form-control" id="">
        <label for="">Gender</label>
        <select class="form-control" name="Gender" id="">
        <option value="">Male</option>
        <option value="">Female</option>
        </select>
        <label for="">From:</label>
        <input type="text" name="From" class="form-control" id="">
        <label for="">Destination:</label>
        <input type="text" name="Destination" class="form-control" id="">
        <br>
        <input type="submit" class="btn btn-success btn-lg" value="Submit">
        <input type="reset"  class ="btn btn-light btn-lg"value="Reset">
  
      </form>
    </div>
    </div>
  </div>

















    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
</body>
</html>