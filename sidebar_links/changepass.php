<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- APlayer CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>

    <title>Change Password</title>
    <link rel="icon" href="headphones.png" type="image/png">
<style>
body{
            background-color: #f7f7f7;
            font-family: 'Trebuchet MS', sans-serif;
			margin-top:100px;
        }
input{
	width:40%;
	height:10%;
	border: 1px;
	border-radius:5px;
	padding:8px 15px 8px 15px;
	margin:10px 0px 15px 0px;
	box-shadow:1px 1px 2px 1px grey;
}
</style>
</head>

<body>
<center>
<h1>Change Password </h1>
<form action="" method="POST">
<INPUT type="text" name="email" placeholder="Enter your email"/><br><br>
<INPUT type="number" name="mobile" placeholder="Enter your mobile number"/><br><br>
<INPUT type="text" name="password" placeholder="Enter your new password"/><br><br>
<input type="submit" name="update" value="SUBMIT" style="background-image: linear-gradient(#cc99ff,#99ccff); font-size:20px;font-weight:bold;font-family: 'Trebuchet MS', sans-serif;"/>
</form>
</center>
</body>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'signup');
if(isset($_POST['update']))
{
	$pass=password_hash($_POST['password'], PASSWORD_BCRYPT);
	$query="UPDATE registration SET password='$pass', cpassword='$pass' WHERE email='$_POST[email]' AND mobile='$_POST[mobile]'";
	$query_run=mysqli_query($connection,$query);
	if($query_run)
	{
		echo'<script type="text/javascript">alert("Password updated.")</script>';
	}
	else
		echo'<script type="text/javascript">alert("Something went wrong.")</script>';
}

?>
