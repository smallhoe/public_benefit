<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>



<?php 
session_start();
include "include/connect.php";
//接受用户信息
$username=$_POST['username'];
$password=sha1($_POST['password']);
$repassword=$_POST['repassword'];
$yzm=$_POST['yzm'];
//验证验证码是否正确
if($yzm==$_SESSION['yzm']){
	  //判断用户名是否存在
	  $result=mysqli_query($link,"select * from hoe_user where username='$username'");
	  if(mysqli_num_rows($result)>0){
		echo '<script>alert("该用户已存在");</script>';  
		echo '<script>location.href="registered.php";</script>';  
	  }else{
		  //插入用户信息到数据库
		  $addsql="insert into hoe_user values('','$username','$password')";
		  $addresult=mysqli_query($link,$addsql);
		  if(mysqli_affected_rows($link)>0){
		  	echo '<script>alert("注册成功");</script>';	
		  	 echo '<script>location.href="login.php";</script>';
			 // header("location:login.php"); 
		    }else{
			echo '<script>alert("注册失败");</script>';	
		    echo '<script>location.href="registered.php";</script>';		
		}
	}		 
}else{
	
   	 echo '<script>alert("验证码错误");</script>';	
	 echo '<script>location.href="registered.php";</script>';	
}
?>