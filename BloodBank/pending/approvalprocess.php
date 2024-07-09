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
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);

$group_donor = mysqli_real_escape_string($link, $_REQUEST['group_donor']);
$age_donor = mysqli_real_escape_string($link, $_REQUEST['age_donor']);

$area_donor = mysqli_real_escape_string($link, $_REQUEST['area_donor']);
$phone_donor = mysqli_real_escape_string($link, $_REQUEST['phone_donor']);

 $lastdonation_donor = mysqli_real_escape_string($link, $_REQUEST['lastdonotion_donor']);


// attempt insert query execution

$sql="INSERT INTO Donor_Data SELECT * FROM  pending_table";
$sql2 ="DELETE FROM pending_table";
if(mysqli_query($link, $sql)){
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if(mysqli_query($link, $sql2)){
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>

</html>