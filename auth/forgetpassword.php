<?php
session_start();
include_once 'config.php';
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $result = mysqli_query($conn,"SELECT * FROM users where username='" . $_POST['username'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_username=$row['username'];
	$email_id=$row['email_id'];
	$password=$row['password'];
	if($username==$fetch_username) {
				$to = $email_id;
                $subject = "Your Password is here!";
                $txt = "Your password is : $password.";
                $headers = "From: prateekrustagi2001@gmail.com" . "\r\n" .
                "CC: akshitmiglani1@gmail.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'Invalid username!';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='username'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>




