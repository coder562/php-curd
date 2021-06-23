<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<h1 class="bg-info text-center">Student Data Display</h1>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>File</th>
				<th>Action</th>
				
				
			</tr>
			<?php
			include "db_conn.php";
			$data="select * from student order by id desc";
			$result=mysqli_query($conn,$data);

			while($a=mysqli_fetch_array($result)){
				// echo "<pre>";
				// print_r($a);
			
			?>
			<tr>
				<td><?php echo $a['id']?></td>
				<td><?php echo $a['name']?></td>
				<td><?php echo $a['email']?></td>
				<td><img src="<?php echo $a['image']?>" style="width: 50px; height:50px; border-radius: 70px;"></td>
				
				<td>
					<a href="student_view.php?a=<?php echo $a['id']?>" class="btn btn-info">View</a>
					<a href="student_edit.php?a=<?php echo $a['id']?>" class="btn btn-info">Edit</a>
					<a href="student_delete.php?a=<?php echo $a['id']?>" class="btn btn-info">Delete</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>

</body>
</html>