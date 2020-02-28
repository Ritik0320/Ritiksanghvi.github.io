<?php
$con=mysqli_connect($host='localhost',$username='root',$password='',$database='inquiry') or die(mysqli_error($con));
$email1=$_POST['email'];
$fullname=$_POST['fname'];
$comname=$_POST['cname'];
$msg=$_POST['message'];
$alertmsg="";

$user_reg_query="insert into details(email,fname,cname,message) values ('$email1','$fullname','$comname','$msg')";
$user_reg_submit=mysqli_query($con,$user_reg_query) or die(mysqli_error($con));
header("Location:contact.php?success");




?>