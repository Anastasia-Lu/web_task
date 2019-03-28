<?php
// 接收用户的数据
// 1.id
$id=$_POST['id'];
//2.密码
$password=$_POST['password'];

//简单验证（先不到数据库）
if($id=="100"&&$password=="123"){
    //合法，跳转到查询页面.php
    header("Location:/PKU_agenda/search.php");
    exit();
}else{
    //非法用户
    header("Location:/PKU_agenda/index.php");
    exit();
}

// 3. 忘记密码

?>