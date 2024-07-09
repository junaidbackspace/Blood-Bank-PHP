<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  padding: 12px 20px;
 background-color:#1b6df2;
 border-color:#1b6df2;
 color:white;
  
}
}
</style>
<title>Delete Records Form</title>
</head>

 
<body>
<form action="deleteinput.php" method="post">
	
	
    <p>
    	<label for="mobile">PhoneNo :</label>
        <input type="text" name="phone_donor" id="phone">
    </p>
	
	
   
	
    <input type="submit" value="Delete" >
	

</form>
</body>
</html>