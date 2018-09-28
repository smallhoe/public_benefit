<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paper Stack</title>
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/body.css"/> 
</head>
<body>
<div class="container">
	<section id="content">
		<form action="./chklogin.php" method="post">
			<h1>会员登录</h1>
			<div class="line">
				<input type="text" placeholder="用户名" 
				name="username" id="username" />
			</div>
			<div class="line">
				<input type="password" placeholder="密码" 
				name="password" id="password" />
			</div>
			 <div class="">
				<span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>		
		    </div> 
			<div class="line">
			
				<input type="submit" value="登录" class="btn btn-primary" id="js-btn-login"/>

				<a href="./index.php">返回首页</a>
				<a href="./registered.php">注册</a>
			
				
			</div>
		</form>
	</section>
</div>

</body>
</html>