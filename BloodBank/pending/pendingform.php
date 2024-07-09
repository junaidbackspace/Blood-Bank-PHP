<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    height:800pt;
}
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
<title>Add Records Form</title>
</head>

 
<body>
    <center><h1>بلڈ ڈونر ٹیم میں شامل ہونے کے لیے اندراج کریں</h1></center>
<form action="insertprocess.php" method="post">
	<p>
    	<label for="firstName">Name</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
    	<label for="lastName">Father Name</label>
        <input type="text" name="last_name" id="lastName">
    </p>
	
	  <p>
    	<label for="group">Blood Group</label>
        <input type="text" name="group_donor" id="group">
    </p>
	
	  <p>
    	<label for="age">Age</label>
        <input type="text" name="age_donor" id="age">
    </p>
	
	
	
	  <p>
    	<label for="Area">Adress</label>
        <input type="text" name="area_donor" id="area">
    </p>
	
    <p>
    	<label for="mobile">Phone no</label>
        <input type="text" name="phone_donor" id="phone">
    </p>
	
	
    <p style="display:none;">
    	<label for="mobile">Last Donation :</label>
        <input type="text" name="lastdonotion_donor" id="donation" placeholder="#" >
    </p>
	
	
    <input type="submit" value="Add me" >
	

</form>
</body>
</html>