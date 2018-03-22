<?php
namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller {
    // 文章详情
    public function article()
    {
        //取session
        $name = session('name');
        //查询标题
    	$result = M('article');
        $res =  $result->select();
        $count = $result->count();
        $Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $result->limit($Page->firstRow.','.$Page->listRows)->order('addtime desc')->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('res',$res);// 赋值分页输出
        $this->assign('name',$name);
        // 模板渲染
        $this->show();
    }
    //发表文章
     public function fabo(){
        //取session
        $name = session('name');
        $this->assign('name',$name);
        // 模板渲染
        $this->show();
    }
    //发表文章方法
    public function dofabo()
    {
        //取session
        $name = session('name');
        //接收表单数据
        $title = $_POST['title'];
        $content = $_POST['content'];
        if (empty($_POST['title']) || empty($_POST['content'])) {
            $this->error('表单不能为空');
        }
        //将表单数据插入数据库
        $article = M("article"); // 实例化User对象
        $data['title'] = $title;
        $data['content'] = $content;
        $data['name'] = $name;
        $data['addtime'] = time();
        $res = $article->add($data);
        //判断是否成功
        if ($res) {
              $this->success('发表成功','/home/article/article');
        } else {
              $this->error('发表失败');
        }
    }
}