<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Polaris</title>
    <link href="/Public/index/css/bootstrap.css" rel="stylesheet" />
    <link href="/Public/index/css/style.css" rel="stylesheet" />
  	<link rel="stylesheet" href="/Public/index/css/teachers.css">
  	<script src="/Public/index/js/jquery-1.7.2.min.js"></script>
    <script src="/Public/index//demos/googlegg.js"></script>
<link rel="stylesheet" href="/Public/index/css/teachers.css">
</head>
<body>
	<div class="adcenter"><script src="/Public/index/js/ggad2_728x90.js"></script></div>
	    <div class="navbar navbar-inverse set-radius-zero" >
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="index.html">
	                    <img style="width: 90px;" src="/Public/index/picture/logo.png" />
	                </a>

	            </div>
	            <div class="right-div">
	            	<?php if(empty($_SESSION['name'])): ?><a href="/home/user/login" class="btn btn-danger pull-right">登录</a>
	            	<?php else: ?>
	            		<a href="" class="btn btn-danger pull-right">欢迎：<?php echo ($name); ?></a><?php endif; ?>
	            </div>
	        </div>
	    </div>

	 <section class="menu-section">
         <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="/">首页</a></li>
                           
                            <li><a href="/home/article/article">文章展示</a></li>
                            <li>
                                <a href="/home/article/fabo" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">发布文章<i class="fa fa-angle-down"></i></a>
                            </li>
                            <?php if(!empty($_SESSION['admin'])): ?><li><a href="/home/admin/admin">后台管理</a></li><?php endif; ?>
                            <?php if(empty($_SESSION['name'])): ?><li><a href="/home/user/register">注册</a></li>
                            <?php else: ?>
                                <li><a href="/home/user/logout">退出</a></li><?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container">
           <div class="row pad-botm">
              <div class="col-md-12">
                <h4 class="header-line text-success lead"><span style="font-size: 30px;">北 </span>极 星 </h4>
              </div>
            </div>
		
            <div class="row">
                <div class="col-md-6" style="margin: 0 25%;">
                     <div class="panel panel-info">
                        <div style="font-size: 18px;" class="panel-heading">
                            登录
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="/home/user/doLogin">
                                <div class="form-group">
                                    <label>用户名</label>
                                    <input class="form-control" type="text" name="name" />
                                </div>
                                <div class="form-group">
                                    <label>密码</label>
                                    <input class="form-control" type="password" name="pwd" />
                                </div>  
                                <input type="submit" style="float: right;" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>