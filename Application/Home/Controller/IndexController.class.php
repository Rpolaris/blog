<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    // 首页
    public function index(){
        //查询标题
    	$result = M('article');
    	$res = $result->select();
        //取session
        $name = session('name');
        $this->assign('name',$name);
        // var_dump($res[0][title]); die;
    	$this->assign('res', $res);
        // 模板渲染
        $this->show();
    }
}