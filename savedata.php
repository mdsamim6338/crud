<?php 
include 'config.php';

$stu_name =$_POST['sname'];
$stu_address =$_POST['saddress'];
$stu_class =$_POST['class'];
$stu_phone =$_POST['sphone'];
// die();
$sql= "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
//die();
echo $result =mysqli_query($conn,$sql) or die("Query Failed");
//die();
header("Location: http://localhost/crud/index.php");

mysqli_close($conn);
?>