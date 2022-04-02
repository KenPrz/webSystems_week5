<?php

	$firstname = $_POST['firstname'] ?? null;
	$lastname = $_POST['lastname'] ?? null;
	$username = $_POST['username'] ?? null;
	$email = $_POST['email'] ?? null;
	$birth = $_POST['birth'] ?? null;
	$home_add = $_POST['home_add'] ?? null;
	$sex = $_POST['sex'] ?? null;
	$password = $_POST['password'] ?? null;
	$description = $_POST['description'] ?? null;
	$agree_terms = $_POST['agree_terms'] ?? null;
	$has_error = 0;
	$error_msg = '';

	if($_SERVER["REQUEST_METHOD"] === "POST") {

		if(!isset($firstname) || strlen(trim($firstname)) == 0 ){
			$has_error = 1;
			$error_msg .= ' &bull; First name is required.<br />';
		}

		if(!isset($lastname) || strlen(trim($lastname)) == 0 ){
			$has_error = 1;
			$error_msg .= ' &bull; Last name is required.<br />';
		}

		if(!isset($username) || strlen(trim($username)) == 0 ){
			$has_error = 1;
			$error_msg .= ' &bull; User name is required.<br />';
		}

		if(!isset($email) || strlen(trim($email)) == 0 ){
			$has_error = 1;
			$error_msg .= ' &bull; Email is required.<br />';
		}

		if(!isset($password) || strlen(trim($password)) == 0 ){
			$has_error = 1;
			$error_msg .= ' &bull; Password is required.<br />';
		}

		if(!isset($agree_terms) || strlen(trim($agree_terms)) == 0 ){
			$has_error = 1;
			$error_msg .= ' &bull; Please review terms and consitions.<br />';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>

	<!-- Bootstrap core CSS and JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<style type="text/css"> .has_error{ color: #842029; } .has_error input{ color: #842029; border-color: #842029; background-color: #f8d7da; } </style>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam inventore aliquam in quia odit distinctio, mollitia quis amet sapiente obcaecati?</p>
</body>
</html>