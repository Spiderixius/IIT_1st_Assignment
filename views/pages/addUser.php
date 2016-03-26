<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="styles/myCss.css"/>
</head>
<body>
	<h1>Add User:</h1>
	<ul>
	  <li><a href="gallery.html">Gallery</a></li>
	  <li><a href="userList.html">Users</a></li>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="contactform.php">Contact Me</a></li>
	</ul>
	<form method="POST" action="userList.html">
		Username <br>
			<input type="text" name="userID"/>
			<br>
			<input type="submit" value="Add User"/> 
			<input type="reset" value="Cancel"/>

	</form>
</body>
</html>