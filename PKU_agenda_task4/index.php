<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>北京大学软件与微电子学院日程管理与查询系统</title>
<link rel="stylesheet" type="text/css" href="index_css.css"/>
</head>

<body class="index_color">
	<div class="login_hd">
		<div class="login_logo"></div>
		<div class="login_title"><a href="index.html">日程管理查询系统</a></div>
	</div>
	<div class="login">
	<div class="index_background"></div>
	<div class="login_main">
	<div class="login_help"><a href="#">帮助</a></div>
		<form action="loginProcess.php" method="post" class="login_form">
		<fieldset>
	<legend>登录表单</legend>
		<div class="login_instruction">账户登录</div>
		<div class="username"><input name="id" type="text" placeholder=" 用户名" />
			<div class="username_image"><img src="image/用户名图标_site2.jpg" alt="用户名图标" /></div>
		</div>
		
		<div class="password"><input name="password" type="password" placeholder=" 密码"/>
			<div class="password_image"><img src="image/密码图标_site2.jpg" alt="密码" /></div>
		</div>
		<form action="" method="get"> 
		<label class="remember_chinese">记住密码</label>
		<input name="password" type="checkbox" class="remember" value="" />
		</form>
		<span class="Signup_btn"><a href="sign_up.php"><input name="Signup" type="button" value="注册" /></a></span>
		<span class="login_btn"><input name="login" type="submit" value="登录" /></span>
		</fieldset>
		</form>
	<div class="forget"><a href="forget_password.php">忘记密码</a></div>


    </div>
	</div>
	<div class="copyright">©2005-2019 北京大学软件与微电子学院 版权所有</div>
	<div class="bottom">
	<ul>
	<li><a href="#">网站地图|</a></li>
	<li><a href="#">法律声明|</a></li>
	<li><a href="#">友情链接</a></li>
	</ul>
	</div>
	
</body>
</html>
