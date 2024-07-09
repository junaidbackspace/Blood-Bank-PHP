<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
       
img[alt="www.000webhost.com"]{
    display:none;
}
  .disclaimer{display:none;}


input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit] {
  width: 40%;
  padding: 12px 20px;
 background-color:#1b6df2;
 border-color:#1b6df2;
 color:white;
 float:right;
  
}
button {
  width: 40%;
  padding: 12px 20px;
 background-color:#04bd20;
 border-color:#04bd20;
 color:white;
  float:left;
}
body{
    height:800pt;
}
}
</style>
<title>Update Records Form</title>
</head>

 
<body>
<form action="editprocess.php" method="post">
	
	
	 <p>
    	<label for="mobile">PhoneNo :</label>
        <input type="text" name="phone_donor" id="phone">
    </p>
	<p>
    	<label for="mobile">New PhoneNo :</label>
        <input type="text" name="new_phone_donor" id="new_phone">
    </p>
		<p>
    	<label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
    	<label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
	
	  <p>
    	<label for="group">Group:</label>
        <input type="text" name="group_donor" id="group">
    </p>
	
	  <p>
    	<label for="age">age:</label>
        <input type="text" name="age_donor" id="age">
    </p>
	
	
	
	  <p>
    	<label for="Area">Area:</label>
        <input type="text" name="area_donor" id="area">
    </p>
	
   
	
	
    <p>
    	<label for="mobile">Last Donation :</label>
        <input type="text" name="lastdonotion_donor" id="donation" placeholder="#" >
    </p>
		
    <input type="submit" value="Update" >
	

</form>
<a href="admin.html"><button>Direct Home</button></a>
</body>
</html>