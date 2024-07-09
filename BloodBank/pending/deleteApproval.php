<html>
  <head>
      <meta http-equiv = "refresh" content = "1; url = http://www.getblood.ga/pending/displaypending.php" />
  </head>

<?php

$link = mysqli_connect("localhost", "id16057380_junaid", "dHbCe<#\)LKwWj1z", "id16057380_hwlo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$phone_donor = mysqli_real_escape_string($link, $_REQUEST['phone_donor']);



// attempt insert query execution
$sql = "Delete from pending_table where phone='$phone_donor'";

if(mysqli_query($link, $sql)){
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

</html>