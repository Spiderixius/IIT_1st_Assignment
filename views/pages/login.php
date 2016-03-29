
<?php require VIEW_DIR . '/header.php'; ?>

<!-- Directs user to the gallery-->
<div class="loginHeader">
	<h1>Login</h1>
</div>

<form id="login_form" method="GET" action="gallery.php"/>
	Username <br>
		<input type="text" name="username" id="loginName" placeholder="Insert Username"/>
		<br>
	Password <br>
		<input type="password" name="password" id="loginPassword" placeholder="Insert Password" autocomplete="off"/>
		<br>
		<input type="submit" id="submitButton" value="Login" onclick="javascript:Validate()" /> 
		<input type="reset" value="Cancel"/> 
</form>
    
<script>
	function Validate(){
		var name = document.getElementById("loginName").value;
		var pw = document.getElementById("loginPassword").value;
		
		var request = new XMLHttpRequest();
		request.open("POST", "/validate", true);
		request.setRequestHeader("Content-Type", "application:json;charset=UTF-8");
		request.send(JSON.stringify({"username":name, "password":pw}));	
		
		request.onreadystatechange = function(){
			if(request.readyState == 4 && request.status == 200){
				//var response = JSON.parse(request.responseText);
				var response = JSON.parse('{"value":true}');
				if(response.value){
					location.replace("/login");
				}
			}
		}
	}
</script>
 
<?php require VIEW_DIR . '/footer.php'; ?>


