<?php
namespace app\login\controller;


use app\admin\model\User;
use think\Controller;
use think\Session;

class Index extends Controller
{
    /**
     * 登录界面
     */
    public function index(){
        return $this->fetch();
    }

    /**
     * 验证登录信息
     */
    function login(){
        $name = request()->post("username");
        $pwd = request()->post("password");
        if($name==""||$pwd==""){
            $this->error("请输入用户名/密码");
        }
        else{
            $user = new User();
            $has = $user->findUser($name,$pwd);
            if($has){
                Session::set("username",$name);
                Session::set("password",md5($pwd));
                $this->success("登录成功",'admin/Index/index');
            }
            else{
                $this->error("用户名或密码错误");
            }
        }
        //$this->redirect();
    }
    /**
     * 退出登录
     */
    function logOut(){
        Session::clear();
        $this->redirect('login/Index/index');
    }
    /**
     * 注册界面
     */
    public function signUp(){
        return $this->fetch();
    }
    /**
     * 进行注册，写入数据库
     */
    function signIn(){
        $name = request()->post("username");
        $pwd = request()->post("password");
        $pwd_con = request()->post("password_confirm");