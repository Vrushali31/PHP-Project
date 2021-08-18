<?php
session_start();
include_once 'config.php';
if(isset($_POST['user']))
{
    $username = $_POST['username'];
    $sql = "SELECT * FROM user where username=$username";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result); 
	$user_id=$row['username'];
	$email_id=$row['email'];
	$id = $row['id'];
	
    if($username==$user_id) {
	    $to = $email_id;
	    $txt = "Hi, $username. Click http://localhost/Grocery%20Store/reset_password.php?id=$id to reset the password";
	    $headers = "From: anshigandhi@gmail.com\r\n";
	    $subject = "Reset Password";
	    $msg=mail($to,$subject,$txt,$headers);
	    if($msg){
	    	$_SESSION['msg'] = 'password link sent';
        }
	    else{
	    	echo "mail was not sent!!";
	    }
    } 
    else{
		echo 'invalid userid';
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
						<h2>  Enter Your Username </h2>
						<div class="inputBox">
						<input type="text" name="username" required=""><br>
    <input type="submit" name="user">	
						</div>
	</div>
	</div>	
	</section>
</form>
</body>
</html>