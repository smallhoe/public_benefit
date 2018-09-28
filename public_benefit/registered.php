<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paper Stack</title>
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/body.css"/> 

<script type="text/javascript">
	function c(fom){
     var repassword=fom.repassword.value;
	var password=fom.password.value;
	var username=fom.username.value;
	var passwordyz=/^[0-9a-zA-Z]{6,10}$/;
	var usernameyz=/^[0-9a-zA-Z]{4,6}$/;
	if(fom.username.value==''){
		alert('请输入用户名');
		fom.username.select();
		return false;
		}
	if(fom.password.value==''){
		alert('请输入登录密码');
		fom.password.select();
		return false;
		}
    if(!usernameyz.test(username)){
		alert('请输入4-6位的用户名');
		fom.username.select();
		return false;
				   }
	if(!passwordyz.test(password)){
		alert('请输入6-10位的密码');
		fom.password.select();
		return false;
				   }
	if(fom.repassword.value==''){
		alert('请输入确认密码');
		fom.repassword.select();
		return false;
		}
	if(repassword!=password){
		alert('密码不一致');
		return false;
		}
	
	
	if(fom.yzm.value==''){
		alert('请输入验证码');
		fom.yzm.select();
		return false;
		}
	
	}
	function yzm(){
	document.getElementById("yzm").src="include/yzm.php?c="+Math.random();	
}
</script>

</head>
<body>
<div class="container">
	<section id="content">
		<form id="f1"  action="./addregistered.php" method="post"  onsubmit="return c(this)" >
			<h1>会员注册</h1>
			<div class="line">
				<input type="text" placeholder="请输入4-6位的用户名" required="" name="username" id="username" />
			</div>
			<div class="line">
				<input type="password" placeholder="请输入6-10位的密码" required="" name="password" id="password" />
			</div>
			<div class="line">
				<input type="repassword" placeholder="两次密码必须一致" required="" name="repassword" id="repassword" />
			</div>
			<div class="line">
				<input type="yzm" placeholder="请输入验证码" required="" name="yzm"   id="yzm" />
				
				
					<a href="">
					<img src="include/yzm.php" alt="" />
					看不清换一张
					</a>
				
				
			</div>
			
			<div class="line">
				
				<input type="submit" value="注册" class="btn btn-primary" id="js-btn-login"/>
			
				<a href="./login.php">返回登录</a>
			
			</div>
		</form>
	</section>
</div>

</body>
</html>