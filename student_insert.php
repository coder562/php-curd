<?php
include "db_conn.php";
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_FILES['image']['name'];
$filename=$_FILES['image']['tmp_name'];

// // echo $a,$b;
// echo "<pre>";
// print_r($b);
echo $a,$b,$c,$d;
$files="upload/".$d;
move_uploaded_file($filename, $files);
$data="insert into student(name,email,password,image)values('$a', '$b' , '$c' , '$files')";
mysqli_query($conn,$data);
?>