<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.css')?>">
<body>
	<div class="container">
		<div class="form-login-group">
      		<form method="POST" action="<?php echo base_url('index.php/login/aksi_login'); ?>" class="form-signin" role="form">
      				<div class="col-md-4 col-md-offset-4">
        		<h2 class="form-signin-heading "><center>Login</center></h2>
        			
        		  		<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        				<input type="password" name="password" class="form-control" placeholder="Password" required>
        			
        		<button class="btn btn-lg btn-primary btn-block btn-login" name="submit" type="submit">Sign in</button>
        		</div>
      		</form>
      	</div>
    </div>

	<!-- <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form> -->
</body>
</html>