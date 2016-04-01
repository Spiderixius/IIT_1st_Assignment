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
<table>
	<tr>
		<th>User Name</th>
		<th>Status</th>
	</tr>
	<tr>
		<td>Jack Lee</td>
		<td>Online</td>
	</tr>
	<tr>
		<td>Hanna Jackson</td>
	</tr>
	<tr>
		<td>Jens Jensen</td>
	</tr>
</table>

<?php require VIEW_DIR . '/footer.php'; ?>