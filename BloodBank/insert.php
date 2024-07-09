<html>
  <head>
           <style>
img[alt="www.000webhost.com"]{
    display:none;
}
  .disclaimer{display:none;}
</style>
      <meta http-equiv = "refresh" content = "1; url = http://www.getblood.ga/form.php" />
  </head>

<?php

$link = mysqli_connect("localhost", "id16057380_junaid", "dHbCe<#\)LKwWj1z", "id16057380_hwlo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);

$group_donor = mysqli_real_escape_string($link, $_REQUEST['group_donor']);
$age_donor = mysqli_real_escape_string($link, $_REQUEST['age_donor']);

$area_donor = mysqli_real_escape_string($link, $_REQUEST['area_donor']);
$phone_donor = mysqli_real_escape_string($link, $_REQUEST['phone_donor']);

 $lastdonation_donor = mysqli_real_escape_string($link, $_REQUEST['lastdonotion_donor']);


// attempt insert query execution
$sql = "INSERT INTO Donor_Data (fname,lname,grp,age,area,phone,last) VALUES ('$first_name', '$last_name', '$group_donor', '$age_donor', '$area_donor', '$phone_donor', '$lastdonation_donor')";

if(mysqli_query($link, $sql)){
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

</html>