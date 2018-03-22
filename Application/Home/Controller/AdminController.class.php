<?php

namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller 
{
	//首页展示
	public function admin()
	{
		$result = M('user');
		//查询总数
    	$count = $result->count();
    	// var_dump($count);die;
    	//查询数据
    	$user = $result->select();
		$this->assign('count', $count);
		$this->assign('user', $user);
		$this->show();
	}
	//删除
	public function del()
	{
		//接收删除的id
		$id = $_GET['uid'];
		//删除数据库
		$User = M("User");
		$res = $User->where("uid = $id")->delete();
		// var_dump($res);die;
		if ($res) {
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
 
	}
	//文章列表页展示
	public function list()
	{
		$result = M('article');
		//查询总数
    	$count = $result->count();
    	// var_dump($count);die;
    	//查询数据
    	$article = $result->select();
		$this->assign('count', $count);
		$this->assign('article', $article);
		$this->show();
	}
	//删除
	public function dodel()
	{
		//接收删除的id
		$id = $_GET['cid'];
		//删除数据库
		$User = M("article");
		$res = $User->where("cid = $id")->delete();
		// var_dump($res);die;
		if ($res) {
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}

}