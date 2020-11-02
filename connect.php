<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
<title>Log-Inl</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="bg-image"></div>
<div class="loginbox">
	<img src="img/jobs.png" class="avatar">
	<h1>Log-In</h1>
	<form>
		
		<input type="name" name="" placeholder="Enter Email">
		
		<input type="password" name="" placeholder="Enter Password">
		<input type="submit" name="" value="Login"><br>
		<a href="#">Forget Password</a><br>
		<a href="signup.html">Sign-up</a>
	</form>
</div>
</body>

<?php
	$servername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="job_portal";

	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$number=$_POST["number"];

	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error){
		die("connection failed:" . $conn->connect_error);	}

	$sql = "INSERT INTO data (name, email, password, number) VALUES ('$name','$email','$password','$number')";

	if ($conn->query($sql) === TRUE) {
		echo "ThankYou! Your details are saved. Now you can login";
	} else{
		echo "error :" . $sql . $conn->error;

	}

	$conn->close();
?>
</html>

