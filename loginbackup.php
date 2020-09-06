<!DOCTYPE html>
<html>
<head>
	<title>user registration and login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="google-signin-client_id" content="723409777815-vaff9s7mclln8cuj2kqt3os10rlhiq8a.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="script1.js"></script>
	<style type="text/css">
		.g-signin2{
			margin-left: 570px;
			margin-bottom: -30px;
			margin-top: -120px;
		}
	</style>
	<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
    <script type="text/javascript">
    	function Redirect()
    	{
    		window.location="index.php";
    	}
    </script>

</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login here</h2>
				 <form action="validation.php" method="post">
				 	<div class="form-group">
				 		<label>Username</label>
				 		<input type="text" name="user" class="form-control" required>
				 	</div>
				 	<div class="form-group">
				 		<label>Password</label>
				 		<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			<div class="col-md-6 login-right">
				<h2>Register here</h2>
				 <form action="registration.php" method="post">
				 	<div class="form-group">
				 		<label>Username</label>
				 		<input type="text" name="user" class="form-control" required>
				 	</div>
				 	<div class="form-group">
				 		<label>Password</label>
				 		<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			
		</div>
		</div>
	</div>
	</div>
    
    <div class="g-signin2" data-onsuccess="onSignIn" onclick="Redirect()"></div>
    






</body>
</html>