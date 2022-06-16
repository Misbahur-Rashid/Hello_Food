<?php


		$servername="localhost";
		$username="root";
		$password="";
		$dbname="food-order";
		$conn = mysqli_connect($servername, $username, $password, $dbname);	

try{

        if(isset($_POST['add'])){
            $result = mysqli_query($conn,"insert login(Name,Email,Password) values('$_POST[name]','$_POST[email]','$_POST[password]')");  
            
        }

        

     }

     catch(Execption $e){
        $error_msg =$e->getMessage();
      }
	
	  
	  if(isset($_POST['save'])){
		    $email=$_POST['email2'];
			$password=$_POST['password2'];
			$query="select * from login where Email='$email' and Password='$password'";
			$result2 = mysqli_query($conn,$query);
			$count = mysqli_num_rows($result2);
            
			if($count>0){
				header('location: index.php');
			}
			
	  }

?>		


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	
</head>

<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form  method="post" action="">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>use your email for registration</span>
			<input type="text" placeholder="Name" name="name"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password"/>
			<button name="add">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="">
			<h1>Login</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>to use your account</span>
			<input type="email" placeholder="Email" name="email2"/>
			<input type="password" placeholder="Password" name="password2"/>
			<a href="#">Forgot your password?</a>
			<button name="save">Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Please enter your personal details</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script>
       const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

</body>
</html>