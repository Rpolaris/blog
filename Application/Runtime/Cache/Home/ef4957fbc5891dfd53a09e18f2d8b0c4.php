<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>后台</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/Public/admin/css/styles.css" rel="stylesheet">
</head>
<body>

<div class="mainContent">
  <div class="ulist">
    <section> <a href="/home/admin/admin"> <img src="/Public/admin/images/d3.jpg"></a>
      <ul>
        <h2><a href="/home/admin/admin">用户管理</a></h2>
        <p><a href="/home/admin/admin">用户资料</a></p>
      </ul>
    </section>
    <section> <a href="/home/admin/list"><img src="/Public/admin/images/d2.jpg"></a>
      <ul>
        <h2><a href="/home/admin/list">博客管理</a></h2>
        <p><a href="/home/admin/list">文章管理</a></p>
  
      </ul>
    </section>
  </div>
	
</div>
<div class="mainContent2">

   <div class="mc1">
		<span>博文管理</span>
   </div>
   
   <div class="mc2">
		<?php if(!empty($res)): ?><span>共有<?php echo ($count); ?>条用户记录</span><?php endif; ?>
   </div>
   
   <div class="mc3">
	   <span style="margin-left:33px;">ID</span>
	   <span>标题</span>
	   <span style="margin-right:85px;"></span>&nbsp;&nbsp;
	   <span>发布时间</span>
	   <span>操作</span>
   </div>
	<?php if(!empty($article)): if(is_array($article)): foreach($article as $key=>$vel): ?><div class="mc4" >
		   <div class="m1"><span style="margin-left: 35px;"><?php echo ($vel["cid"]); ?></span></div>
		   <div class="m3" style="width: 270px;"><span><?php echo ($vel["title"]); ?></span></div>
		   <div class="m4"><span style="margin-left: -45px;"><?php echo date("Y-m-d H-i-s",$vel['addtime']); ?></span></div>
		   <div class="m7 " ><span style="margin-left: 10px;"><a href='/home/admin/dodel?cid=<?php echo ($vel["cid"]); ?>'>删除</a></span></div>
	   </div><?php endforeach; endif; endif; ?>
</div>
 
</body>
</html>