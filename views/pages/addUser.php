<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'Login'; ?>

<h1>Add User:</h1>
<ul>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="userList">Users</a></li>
  <li><a href="/">Home</a></li>
  <li><a href="contactform">Contact Me</a></li>
</ul>
<form method="POST" action="userList">
	Username <br>
		<input type="text" name="userID"/>
		<br>
		<input type="submit" value="Add User"/> 
		<input type="reset" value="Cancel"/>

</form>

<?php require VIEW_DIR . '/footer.php'; ?>