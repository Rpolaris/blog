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
		<!-- ==================轮播=========== -->
		<div  class="teachers_banner">
		    <div class="container clearfix teachers_b">
		        <div class="slide" id="slide">
		            <ul>
		                <li> <img src="/Public/index/picture/1.jpg"  title=""> </li>
		                <li> <img src="/Public/index/picture/2.jpg"  title=""> </li>
		                <li> <img src="/Public/index/picture/3.jpg"  title=""> </li>
		                <li> <img src="/Public/index/picture/4.jpg"  title=""> </li>
		                <li> <img src="/Public/index/picture/5.jpg"  title=""> </li>
		                <li> <img src="/Public/index/picture/6.jpg"  title=""> </li>
		            </ul>
		            <div class="arrow">
		                <div class="prev" style="left: -200px;"><</div>
		                <div class="next" style="right: -188px;">></div>
		            </div>
		        </div>
		    </div>
		</div>
<div class="row">
    <div class="col-md-6" style="width: 100%">
         <div class="panel panel-info">
            <div style="font-size: 18px;" class="panel-heading">
                发表文章
            </div>
            <div class="panel-body">
                <form role="form" action="/home/article/dofabo" method="post">
                    <div class="form-group" style="width: 60%">
                        <label>标题</label>
                        <input class="form-control" type="text" name="title" />
                    </div>
                     <div class="form-group" style="width: 60%;">
                                <label>内容</label>
                                <!-- <textarea></textarea> -->
                                <textarea class="form-control" type="text" name="content" style="min-height:500px;" ></textarea>
                     </div>
                      <?php if(empty($_SESSION['name'])): ?><button type="submit" class="btn btn-success disabled">请登录</button>
                        <?php else: ?>
                            <button type="submit" class="btn btn-success">发表文章</button><?php endif; ?>
                    <a href="/"><input type="button" class="btn btn-primary" value="返回首页"></a>
                </form>
            </div>
        </div>
    </div>
  </div>
 </div>
</div>
</body>
<script>
    $(function () {
        /*图片位置数据*/
        var datas = [
            {'z-index': 6, opacity: 1, width: 760, height: 330, top: 40, left: 0},
            {'z-index': 4, opacity: 0.6, width: 560, height: 243, top:80, left: -225},
            {'z-index': 3, opacity: 0.4, width: 480, height: 203, top: -10, left: -170},
            {'z-index': 2, opacity: 0.2, width: 620, height: 269, top: -60, left: 110},
            {'z-index': 3, opacity: 0.4, width: 480, height: 203,  top: -10, left: 430},
            {'z-index': 4, opacity: 0.6, width: 560, height: 243, top: 80, left: 420},
        ]
        move();

        function move() {
            /*图片分布*/
            for (var i = 0; i < datas.length; i++) {
                var data = datas[i];
                $('#slide ul li').eq(i).css('z-index',data['z-index']);
                $('#slide ul li').eq(i).stop().animate(data, 1200);
            }
        }

        /*左箭头事件*/
        $('.prev').on('click', function () {
            var last = datas.pop();
            datas.unshift(last);

            move();
        })

        /*右箭头事件处理函数*/
        function nextYewu(){
            var first = datas.shift();
            datas.push(first);
            move();
        }
        /*右箭头事件*/
        $('.next').on('click', nextYewu);

        /*自动播放*/
        var timer = setInterval(function(){
            nextYewu();
        },3000);
        /*鼠标进入slide显示箭头,清除自动播放*/
        $('#slide').on({
            mouseenter: function () {
                $('.arrow').css('display', 'block');
                clearInterval(timer);
            }, mouseleave: function () {
                $('.arrow').css('display', 'none');
                /*鼠标离开时自动播放*/
                clearInterval(timer);
                timer = setInterval(function(){
                    nextYewu();
                },4000)
            }
        })
    
    })
</script>
</html>