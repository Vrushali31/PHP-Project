<?php
	session_start();
	require_once("config.php");
	if(isset($_POST["user"]))
	{
		$new=$_POST['new_username'];
		$old=$_SESSION['login']['username'];
		$sql="UPDATE `users` SET `username` = '$new' WHERE `username` = '$old'";
		if(mysqli_query($conn,$sql))
		{
			$_SESSION['login']['username']=$_POST['new_username'];
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

	
	<section class="contact">
			
			<div class="container">
	 
				<div class="contactForm">
				<form method="POST" action="">
						<h2>  Enter Your New Username </h2>
						<div class="inputBox">
						<input type="text" name="new_username" required=""><br>
    <input type="submit" name="user">	
						</div>
	</div>
	</div>	
	</section>
</form>
</body>
</html>
 