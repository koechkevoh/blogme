<?php
	//define variables and set to empty values
	$username_err = $email_err = $password_err = "";
	$username = $email = $password = $password1 = "";

	//If the input is empty, an error message is stored in the different error variables
	// and if it is not empty, it sends the user input data through the test_input() function



	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["username"])) {
			$username_err = "usernsme is reguired";
		}else{
			$username = test_input($_POST["username"]);
		}

		if (empty($_POST["email"])) {
			$email_err = "email is reguired";
		}else{
			$email = test_input($_POST["email"]);
		}

		if (empty($_POST["password"]) || empty($_POST["password1"])) {
			$password_err = "password is reguired";
		}else{
			$password = test_input($_POST["password"]);
		}
	}

//this function filters the user input and guards against attacks
// it takes the user input as its parameter
function test_input($data) {
  $data = trim($data);//strip unnecessary characters
  $data = stripslashes($data);// removes backslashes
  $data = htmlspecialchars($data);// invalidates tags in the user input
  return $data;
}
?>