<?php
include("connection.php");
if (isset($_POST['Owner_info'])) {
  $ownername = mysqli_real_escape_string($db, $_POST['ownername']);
  $phnumber = mysqli_real_escape_string($db, $_POST['phnumber']);
  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $pin = mysqli_real_escape_string($db, $_POST['pin']);


$queryOwner="INSERT INTO owner (ownername,pnumber, aadhar,email,address,city,pin) 
          VALUES('$ownername','$phnumber', '$aadhar','$email','$address','$city','$pin')";
$data=mysqli_query($db, $queryOwner);
   header("location:room.php");
 $_SESSION['ownername'] = $ownername;
}



?>