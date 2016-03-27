<?php require VIEW_DIR . '/header.php'; ?>

<?php $title = 'Login'; 
	if (isset($_POST["un"]) & isset($_POST["pw"])) {
		require "dbConnecter.php";
		$result = $dbconnection->query('SELECT username, password FROM users');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		while ($row = $result -> fetch()) {
			if ($row['username'] == $_POST['un'] && $row['password'] == $_POST['pw']) {
				$_SESSION["loggedIn"] = true;
			}
		}
	}

?>


<!-- Directs user to the gallery-->
<div class="loginHeader">
	<h1>Login</h1>
</div>
<form method="POST"	<?php if(isset($_SESSION['loggedIn']) && $_SESSION["loggedIn"] == true) {?> action="gallery"><?php} else {?> action="/">
	<?php }?>
	
	Username <br>
		<input type="text" name="un"/>
		<br>
	Password <br>
		<input type="password" name="pw"/>
		<br>
		<input type="submit" value="Login"/> 
		<input type="reset" value="Cancel"/> 
</form>

<?php require VIEW_DIR . '/footer.php'; ?>