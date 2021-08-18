<?php
	session_start();
	require_once("config.php");
	$_SESSION['login']['username']="Anshi";
	if(isset($_POST["pass"]))
	{
		$new=$_POST['new_pass'];
		$user=$_SESSION['login']['username'];
		$sql="UPDATE `users` SET `password` = '$new' WHERE `username` = '$user'";
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Record Updated...')</script>";
			echo "<script>window.location='My Account.php'</script>";
		}
		else
		{
			echo "hgdschj";
			echo $sql;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Data</title>
	<link rel="stylesheet" type="text/css" href="style_signup.css">    
	
<style>
	.contactForm h2::before{
    content: '';
    height: 4px;
    width: 50px;
    position: absolute;
    top:48%;
    left:32.5%;
    background-color:#8073fa;
}
.contactForm h2::after{
    content: '';
    height: 4px;
    width: 25px;
    position: absolute;
    top:48%;
    left:32.5%;
    margin-top: 8px;
    background-color: #26ff00;
}
</style>
</head>
<body>

	<!-- <form method="POST" action="">
    Enter Your New Password: 
    <input type="text" name="new_pass" required=""><br>
    <input type="submit" name="pass">
</form> -->

<section class="contact">
			
			<div class="container">
	 
				<div class="contactForm">
				<form method="POST" action="">
						<h2>  Enter Your New Password: </h2>
						<div class="inputBox">
						<input type="text" name="new_pass" required=""><br>
    <input type="submit" name="pass">	
						</div>
	</div>
	</div>	
	</section>				
</body>
</html>
 