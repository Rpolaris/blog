<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>后台</title>
<meta name="keywords" content="绿色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
<meta name="description" content="这是一个有关Green绿色小清新的夏天的css3 html5 网站模板" />
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
		<span>用户管理</span>
   </div>
   
   <div class="mc2">
   		<?php if(!empty($res)): ?><span>共有<?php echo ($count); ?>条用户记录</span><?php endif; ?>
   </div>
   
   <div class="mc3">
	   <span style="margin-left:33px;">昵称</span>
	   <span>创建时间</span>
	   <span style="margin-right:85px;">手机</span>
	   <span>用户类型</span>
	   <span>操作</span>
   </div>
	<?php if(!empty($user)): if(is_array($user)): foreach($user as $key=>$vel): ?><div class="mc4">
		   <div class="m1"><span style="margin-left: 35px;"><?php echo ($vel["name"]); ?></span></div>
		   <div class="m3"><span></span><?php echo ($vel["addtime"]); ?></div>
		   <div class="m4"><span style="margin-left: -45px;"><?php echo ($vel["phone"]); ?></span></div>
		   <?php if($vel['admin'] < 1): ?><div class="m6" ><span style="margin-left: -15px;">普通用户</span></div>
		   <?php else: ?>
		   <div class="m6" ><span style="margin-left: -15px;">管理员</span></div><?php endif; ?>
		   <input type="hidden" value="">
		   <div class="m7 " ><span style="margin-left: 10px;"><a href='/home/admin/del?uid=<?php echo ($vel["uid"]); ?>'>删除</a></span></div>
	   </div><?php endforeach; endif; endif; ?>
</div>
 
</body>
</html>