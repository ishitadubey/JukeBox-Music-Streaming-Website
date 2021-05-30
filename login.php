<?php

session_start();

?>
<!DOCTYPE html>
<head>
    <title>MusicStream - Login</title>
	<link rel="icon" href="headphones.png" type="image/png">
    <?php  include 'C:\xampp\htdocs\music-streaming\style.php' ?> 
	<?php  include 'C:\xampp\htdocs\music-streaming\links.php' ?>
    
</head>
<body>
<?php

include 'C:\xampp\htdocs\music-streaming\dbcon.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con, $_POST['email']) ;
    $password = mysqli_real_escape_string($con, $_POST['password']) ;

    $email_search = " select * from registration where email='$email' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];
        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "login successful";
            ?>
            <script>
                location.replace("home.php");
            </script>
            <?php
            
        }else{
        echo "Incorrect password";
        }

    }else {
        echo "Invalid Email";
    }
}
?>



<div class="card bg-light" style="background-image: linear-gradient(#cc99ff,#99ccff); height: 100vh;
    width: 100vw;">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i>Login via Gmail</a>
				<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i>Login via facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light">OR</span>
			</p>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="email" class="form-control" placeholder="Username" type="email" required>
					</div> <!-- form-group// -->
					<div class="form-group input-group">
                    
						<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
						</div> <!-- form-group// -->
                        <div class="form-group">
										<button type="submit" name="submit" class="btn btn-primary btn-block"> Login  </button>
										</div> <!-- form-group// -->
										<p class="text-center">Not Have an account? <a href="regis.php">Sign Up here</a> </p>
									</form>
								</article>
								</div>
							</div>
</body>
</html>