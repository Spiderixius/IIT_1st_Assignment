<?php require VIEW_DIR . '/header.php'; ?>


<!-- Directs user to the gallery-->
<div class="loginHeader">
	<h1>Login</h1>
</div>
<form method="GET" action="gallery.php"/>
	Username <br>
		<input type="text" name="username" placeholder="Insert Username"/>
		<br>
	Password <br>
		<input type="password" name="password" placeholder="Insert Password" autocomplete="off"/>
		<br>
		<input type="submit" id="submitButton" value="Login"/> 
		<input type="reset" value="Cancel"/> 
</form>

<?php require VIEW_DIR . '/footer.php'; ?>