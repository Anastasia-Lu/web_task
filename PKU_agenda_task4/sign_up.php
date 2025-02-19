<html>
<head>
<meta charset="UTF-8">
<title>北京大学软件与微电子学院日程管理与查询系统</title>
<link rel="stylesheet" type="text/css" href="signup_css.css"/>
</head>
<body class="index_color">
<div class="Signup_hd">
		<div class="index_logo"></div>
		<div class="index_title"><a href="index.html">日程管理查询系统</a></div>
	</div>
	<div class="Signup">
	<div class="index_background"></div>
	</div>


<div class="Signup">
	<div class="index_background"></div>
	<div class="Signup_main">
<div class="register-box-body">
        <p class="login-box-msg">注册一个新用户</p>
        <form action="SignupProcess.php" method="post">
            <div class="form-group has-feedback"> <span class="glyphicon glyphicon-leaf form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" name="username" class="form-control" placeholder="用户名" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control" placeholder="密码" />
                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="repassword" class="form-control" placeholder="确认密码" />
                <span class="glyphicon glyphicon-check form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="email" name="email" class="form-control" placeholder="邮箱" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="number" name="mobile" class="form-control" placeholder="手机号码" maxlength="11" />
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>
          <div class="form-group has-feedback">
            <input type="text" name="verify" class="form-control" placeholder="验证码" style="width:200px;" />
                <span class="glyphicon glyphicon-qrcode form-control-feedback" style="right:120px;"></span>
            <img class="verify" src="ver_code.php" alt="验证码" onClick="this.src=this.src+'?'+Math.random()" />
            </div>
            <div class="row">
              <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label class="agree">
                          <input type="checkbox" name="agree" value="1">
                          我同意 <a href="#">网站安全协议</a>
                          <button type="submit" class="btn_btn-primary_btn-block_btn-flat">点击注册</button>
                        </label>
</div>
</div><!-- /.col -->
                <div class="col-xs-4"> </div><!-- /.col -->
            </div>
			</div>
        </form>
        <a href="index.php" class="text-center">我已经注册了账户</a>
    </div>
</body>
