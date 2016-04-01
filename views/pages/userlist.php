<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'User List'; ?>

<h1>User List</h1>
<br>
<ul>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="userlist">Users</a></li>
  <li><a href="/">Home</a></li>
  <li><a href="contactform">Contact Me</a></li>	
</ul>
<form method="GET" action="/adduser">
	<input type="submit" value="Add a user"/>
</form>
<br>
<hr>
<br>

<form method="GET" action="/updateUserList">
	<input type="button" value="Update"/> 
</form>

<?php require VIEW_DIR . '/footer.php'; ?>