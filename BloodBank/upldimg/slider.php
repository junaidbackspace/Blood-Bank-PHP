<html>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <style>
img[alt="www.000webhost.com"]{
    display:none;
}
  .disclaimer{display:none;}
</style>
<body>
<?php 
$username = "id16057380_junaid"; 
$password = "dHbCe<#\)LKwWj1z"; 
$database = "id16057380_hwlo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM image ";


if ($result = $mysqli->query($query)) {
	

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $img = $row["filename"];
        echo "$img";

echo '<img src="'.$img.'" />';
}
}
?>
</body>
</html> 