<?php
include ("configure-form.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = $_POST["Name"];
  
    $phone_Number = $_POST["Phone_Number"];
  
    
    $sql = "INSERT INTO `Form`(`Name`, `Phone_Number`) 
    VALUES ('$name','$phone_Number')";
    $result = mysqli_query($link,$sql);
    if($result == true){
        echo "submitted";
    }
    else{
        echo "error!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newform</title>
    <link rel="stylesheet" href="newform.css">
</head>
<body>
    

<form action="" method = "POST">
<div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
        <div class= "formm">
          <!-- <div class="screen-header-left"> -->
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-">
            <!-- <div class="screen-header-ellipsis"></div> -->
            <!-- <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div> -->
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span   >KSRTC Passenger Info </span><br>
              
            </div>
            <div class="app-contact"></div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <div class="app-form-group">
                <input class="app-form-control" name = "Name" placeholder="NAME" required >
              </div>
              <div class="app-form-group">
                <input class="app-form-control" name = "Phone_Number" placeholder="CONTACT NO" required >
              </div>
        
              <div class="app-form-group message">
                <button class="app-form-button">CANCEL</button>
                <button class="app-form-button">SEND</button>
              </div>
            </div>
        </div>
      </div>
      </form>
      <div class="credits">
        
         <!-- <a class="credits-link" href="https://dribbble.com/shots/2666271-Contact" target="_blank"> -->
          <!-- <svg class="dribbble" viewBox="0 0 300 250">
            <g stroke="black" fill="none">
              <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
              <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
              <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
              <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
            </g>
          </svg> -->
           <!-- Medhya
        </a> --> 
      </div>
    </div>
  </div>
</div>
  </body>
</html>
  
  