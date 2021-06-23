<?php
include "db_conn.php";
$id=$_GET['a'];
$data="select * from student where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	
</head>
<body style="background-color: #f2f5ce;">
	<!-- name,email,password,image -->

	<div class="container">
	
		<form method="post" action="student_update.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $b['id'] ?>">
		<div class="form-group">
			<label>Student Name</label>
			<input type="text" class="form-control" name="name"  placeholder="Enter name" value="<?php echo $b['name'] ?>">
		</div>

		<div class="form-group">
			<label>Email address</label>
			<input type="email" class="form-control" name="email"  placeholder="Enter email" value="<?php echo $b['email'] ?>">
			<small class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>

		<div class="form-group">
   			<label>Password</label>
    		<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $b['password'] ?>">
    	</div>

  		<div class="form-group">
  			<label>File Submission</label>
  			<input type="file" class="form-control" name="image" value="<?php echo $b['image'] ?>">
  			 <img src="<?php echo $b['image']?>" style="width: 50px; height:50px; border-radius: 70px;">
  			<small class="form-text text-muted">Upload Your File</small>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
  	</form>

  </div>


</body>
</html>