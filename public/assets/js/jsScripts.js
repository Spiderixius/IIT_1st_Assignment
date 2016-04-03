
// Script to handle validation of user
function validateUser(){

	var name = document.getElementById("loginName").value;
	var pass = document.getElementById("loginPassword").value;

	var xhrequest =  new XMLHttpRequest();
	xhrequest.open("POST", "/login", true);
	xhrequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhrequest.send(JSON.stringify({"username":name, "password":pass}));	

	xhrequest.onreadystatechange = function(){
		if(xhrequest.readyState == 4 && xhrequest.status == 200){
			if(JSON.parse(xhrequest.responseText).value){
				location.replace("/gallery");
			}
			else{
					document.getElementById("loginText").innerHTML = "Incorrect password";
			}
		}
	}
}