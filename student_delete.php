<?php
include "db_conn.php";
$id=$_GET['a'];
echo $data="delete from student where id=$id";
mysqli_query($conn,$data);
header('Location:student_display.php');

?>