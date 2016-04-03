<?php require VIEW_DIR . '/header.php'; ?>
<?php $title = 'User List'; ?>

<h1>User List</h1>
<br>
<ul>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="userlist">Users</a></li>
  <li><a href="logout">Logout</a></li>
</ul>
<form method="GET" action="/showAddUserPage">
	<input type="submit" value="Add a user"/>
</form>
<br>
<hr>
<br>

<form method="GET" action="/userlist">
	<input type="submit" value="Update"/> 
</form>

<?php require VIEW_DIR . '/footer.php'; ?>