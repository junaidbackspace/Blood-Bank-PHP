<html>
  <head>
      <meta http-equiv = "refresh" content = "1; url = http://www.getblood.ga/edit.php" />
  </head>

<?php

$link = mysqli_connect("localhost", "id16057380_junaid", "dHbCe<#\)LKwWj1z", "id16057380_hwlo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$phone_donor = mysqli_real_escape_string($link, $_REQUEST['phone_donor']);

$new_phone_donor = mysqli_real_escape_string($link, $_REQUEST['new_phone_donor']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);

$group_donor = mysqli_real_escape_string($link, $_REQUEST['group_donor']);
$age_donor = mysqli_real_escape_string($link, $_REQUEST['age_donor']);

$area_donor = mysqli_real_escape_string($link, $_REQUEST['area_donor']);


 $lastdonation_donor = mysqli_real_escape_string($link, $_REQUEST['lastdonotion_donor']);



 $fn= strlen($first_name);
 $ln= strlen($last_name);
 $gr= strlen($group_donor);
 $ag= strlen($age_donor);
 $ar= strlen($area_donor);
 $ld= strlen($lastdonation_donor);
 $np= strlen($new_phone_donor);
  
if( $fn > 0) {
   $sql = "UPDATE Donor_Data SET fname='$first_name' where phone='$phone_donor'";
  }
else if( $ln > 0) {
   $sql = "UPDATE Donor_Data SET lname='$last_name' where phone='$phone_donor'";
  }
  else if($gr > 0) {
   $sql = "UPDATE Donor_Data SET grp='$group_donor' where phone='$phone_donor'";
  }
   else  if($ag > 0) {
   $sql = "UPDATE Donor_Data SET age='$age_donor' where phone='$phone_donor'";
  }
  else  if($ar> 0) {
   $sql = "UPDATE Donor_Data SET area='$area_donor' where phone='$phone_donor'";
  }
  
 else  if($ld > 0) {
   $sql = "UPDATE Donor_Data SET last='$lastdonation_donor' where phone='$phone_donor'";
  }
  else if($np > 0) {
   $sql = "UPDATE Donor_Data SET phone='$new_phone_donor' where phone='$phone_donor'";
  }

else{
	echo "No Entry ";
}

if(mysqli_query($link, $sql)){
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

</html>
