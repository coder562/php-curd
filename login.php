<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body style="background-color: #f2f5ce;">
	<!-- name,email,password,image -->

	<div class="container">
	
		<form method="post" action="login_insert.php" enctype="multipart/form-data">
		

		<div class="form-group">
			<label>Email address</label>
			<input type="email" class="form-control" name="email"  placeholder="Enter email">
			<small class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>

		<div class="form-group">
   			<label>Password</label>
    		<input type="password" class="form-control" name="password" placeholder="Password">
    	</div>

  		
  		<button type="submit" value="login" class="btn btn-primary">Login</button>
  	</form>

  </div>


</body>
</html>