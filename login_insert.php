<?php
include "db_conn.php";
$a=$_POST['email'];
$b=$_POST['password'];

// echo $a,$b;
$data="select * from student where email='$a' AND password='$b'";
$result=mysqli_query($conn,$data);

echo "<pre>";
print_r($result);
echo $total=mysqli_num_rows($result);
if($total==1){
header('Location:dashboard.php');
}
else{
	echo "incorrect login";
}


?>