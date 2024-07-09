<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <style>
img[alt="www.000webhost.com"]{
    display:none;
}
  .disclaimer{display:none;}
  
  
  input[type=submit] {
  width: 100%;
  padding: 12px 20px;
 background-color:#1b6df2;
 border-color:#1b6df2;
 color:white;
  
}
</style>
<body>
<?php 
$username = "id16057380_junaid"; 
$password = "dHbCe<#\)LKwWj1z"; 
$database = "id16057380_hwlo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM pending_table";


echo '<table border="2" cellspacing="8" cellpadding="15"> 
      <tr> 
	  <th> <font face="Arial">#</font> </th> 
          <th> <font face="Arial">Name</font> </th> 
          <th> <font face="Arial">Father Name</font> </th> 
          <th> <font face="Arial">Group</font> </th>   
		  <th> <font face="Arial">Age</font> </th> 
          <th> <font face="Arial">Area</font> </th> 
          <th> <font face="Arial">Phone</font> </th> 
           <th> <font face="Arial">Last Donation</font> </th> 
          
          
      </tr>';

if ($result = $mysqli->query($query)) {
	$a=1;
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["fname"];
        $field2name = $row["lname"];
        
        $field3name = $row['grp'];
        $field4name = $row['age'];

        $field5name = $row['area'];
        $field6name = $row['phone'];
         $field7name = $row['last'];

        echo '<tr> 
		<td>'.$a.'</td>
                  <td contentEditable="true">'.$field1name.'</td> 
                  <td contentEditable="true">'.$field2name.'</td> 
                  <td contentEditable="true">'.$field3name.'</td> 
				  <td contentEditable="true" >'.$field4name.'</td> 
                  <td contentEditable="true">'.$field5name.'</td> 
				  
                  <td contentEditable="true" >'.$field6name.'
                   <td> <form action="deleteApproval.php" method="post">
	
	
    <input type="hidden" name="phone_donor" value="'.$field6name.'">

    <input type="submit" value="Delete" >
</form> </td> 

             
              </tr>';
			  $a=$a+1;
    }
    $result->free();
} 
?>


<form action="approvalprocess.php" method="post">

	
	
    <input type="submit" value="Approve" >
	

</form>
</body>
</html>