<html>
  <head>
      <meta http-equiv = "refresh" content = "1; url = http://www.getblood.ga/form.php" />
  </head>

<?php

$link = mysqli_connect("localhost", "id16057380_junaid", "dHbCe<#\)LKwWj1z", "id16057380_hwlo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$pic_no = mysqli_real_escape_string($link, $_REQUEST['no_pic']);
$pic_upload = mysqli_real_escape_string($link, $_REQUEST['upload_pic']);


// attempt insert query execution
$sql = "INSERT INTO image VALUES ( '$pic_no','$pic_upload')";

if(mysqli_query($link, $sql)){
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

</html>