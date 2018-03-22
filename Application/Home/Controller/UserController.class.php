<?php

namespace Home\Controller;
use Think\Controller;
class UserController extends Controller 
{
	//登录页面
	public function login()
	{
		//取session
		$name = session('name');
		$this->assign('name',$name);
		$this->show();
	}
	// 执行登录方法
	public function doLogin()
	{
		//接收表单数据
		$name = $_POST['name'];
		$pwd = $_POST['pwd'];
		//判断表单数据不为空
		if (empty($_POST['name']) || empty($_POST['pwd'])) {
			$this->error('表单不能为空');
		}
		//判断数据库
		$user = M('user');
		$result = $user->where("name = '$name'")->find();
		// var_dump($result['password']);die;
		if ($result) {
			if ($result['password'] == md5($pwd)) {
				//存入session
				session('name',$name);	
				//如果是管理员就存入session
				if ($result['admin'] != 0) {
					session('admin',$result['admin']);	
				}
				$this->success('登录成功','/');
			} else {
				$this->error('密码输入错误');
			}
		} else {
			$this->error('登录失败');
		}
 	}
	//注册
	public function register()
	{
		//取session
		$name = session('name');
		$this->assign('name',$name);
		$this->show();
	}
	public function doRegister()
	{
		//接收表单数据
		$username = $_POST['name'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		if (empty($_POST['name']) || empty($_POST['name']) ||empty($_POST['name'])) {
			$this->error('表单数据不能为空');
		}
		//插入数据库
		$data = ['name'=>$username, 'password'=>md5($password), 'phone'=>$phone];
		$reg = M('user');
		$res = $reg->add($data);
		if ($res) {
			$this->success('注册成功','/home/user/login');
		} else {
			$this->error('注册失败');
		}
	}
	//退出
	public function logout()
	{
		//清空session中的值
		$name = session('name',null);
		$admin = session('admin',null);
		if ($name == null && $name == null) {
			$this->success('退出成功');
		} else {
			$this->error('退出失败');
		}
		
	}
}