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
  width: 50%;
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
<title>Upload Image</title>
</head>

 
<body>
<form action="imgprocess.php" method="post">
<center><h2>Update Slider images</h2><center>
<div class="form-group">

<label>Image no:</label>
				<input class="form-control" type="text" name="no_pic" value="" />
				<br>
				<input class="form-control" type="file" name="upload_pic" value="" />
			</div>
			<div class="form-group">
				 <input type="submit" value="UPLOAD" >
			</div>

</form>
</body>
</html>