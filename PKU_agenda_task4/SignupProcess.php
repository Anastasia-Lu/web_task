<?php
header("Content-type: text/html; charset=utf-8");
 //接收数据
  $username=$_POST['username']; //接受用户名
$password=$_POST['password'];//接受密码
$repassword=$_POST['repassword'];//接受密码
  //判断用户名是否合法
$first_username=substr($username,0,1);//取出用户名第一个字母
$ascii_username=ord($first_username);//第一个字母转换为ASCII值

$str_number = trim($_POST['verify']);


session_start();
if('' == $str_number || $str_number != $_SESSION['authcode']) 
{
    exit('验证码输入错误.<a href="sign_up.php">重新注册</a>');
}
if(!(($ascii_username>=65&&$ascii_username<=90)||($ascii_username>=97&&$ascii_username<=122)))
{
	exit('用户名首字母不合法.<a sign_up.php">重新注册</a>');
}
if(!(strlen($username)>=5&&strlen($username)<=12))
	{
        exit('用户名长度不合法.<a href="sign_up.php">重新注册</a>');
	}
if(!(strlen($password)>=5&&strlen($password)<=12))
{
    exit('密码长度不合法.<a href="sign_up.php">重新注册</a>');
}
if(!($password==$repassword))
{
    exit('两次密码不一致.<a href="sign_up.php">重新注册</a>');
}

$myfile = fopen("username.txt", "a") or die("Unable to open file!");//新建文件夹用来储存username
fwrite($myfile, $username."#".$password."#");//把注册的用户名和密码写入文件

exit('注册成功.<a href="index.php">返回登陆</a>');
?>
