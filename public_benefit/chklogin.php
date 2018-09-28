<?php 
  session_start();
//mysqli_connect建立数据库连接
	  $link=mysqli_connect('localhost','root','','public_benefit')or die(      '数据库连接失败：'.mysqli_connect_error());
	  //通道编译
	  mysqli_query($link,'set names utf8');
$username=$_POST['username'];
$password=sha1($_POST['password']);
  
$result=mysqli_query($link,"select * from hoe_user where username='$username' and password='$password'");
  
  if(mysqli_num_rows($result)>0){
	//验证正确  
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['userid']=$userid;
	header("Location:index.php");
   }else{
	//验证失败
     echo '<script>alert("用户名或密码错误")</script>';
	echo '<script>location.href="login.php"</script>';
  }
  
?>