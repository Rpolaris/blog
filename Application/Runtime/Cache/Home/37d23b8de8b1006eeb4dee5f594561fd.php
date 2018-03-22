<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Polaris</title>
    <link href="/Public/index/css/bootstrap.css" rel="stylesheet" />
    <link href="/Public/index/css/style.css" rel="stylesheet" />
    <link href="/Public/indexcss/teachers.css" rel="stylesheet" />
    <script src="/Public/index/js/jquery-1.7.2.min.js"></script>
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
     <!-- MENU SECTION END-->
<div class="content-wrapper">
   <div class="container">
     <div class="row pad-botm">
        <div class="col-md-12">
            <h4 class="header-line text-success lead"><span style="font-size: 30px;">北 </span>极 星 </h4>
            
        </div>
    </div>
 <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12" >
      <?php if(!empty($list)): if(is_array($list)): foreach($list as $key=>$vel): ?><div class="panel panel-success">
          <div class="panel-heading" style="font-size: 20px; font-family: 宋体">
             <?php echo ($vel["title"]); ?>
          </div>
          <div class="panel-body" style="font-size: 16px; font-family: 楷体">
              <?php echo ($vel["content"]); ?>
          </div>
        </div>
        <!-- <div class="pager"><?php echo ($page); ?></div> --><?php endforeach; endif; endif; ?>
      <div class="paginList pager"><?php echo ($page); ?></div>
</div>
 
<div class="col-md-4 col-sm-4 col-xs-12">
 <div class="panel panel-primary ">
        <div class="panel-heading">
            主人寄语
        </div>
        <div class="panel-body chat-widget-main">
            <div class="chat-widget-left">
              自己喜欢的东西，就不要问别人好不好看
               喜欢胜过所有道理，原则抵不过我乐意
            </div>
            <div class="chat-widget-name-left">
               
                <h4>  &nbsp;Polaris</h4>
                <h5>Time 2:00 pm at 2th june</h5>
            </div>
            <hr />
            <div class="chat-widget-right">
                也许有很多个瞬间，你应该也是喜欢过我的，只不多这些瞬间稍纵即逝，你也没坚持，我也没当真
            </div>
            <div class="chat-widget-name-right">
                <h4>  &nbsp;Polaris</h4>
                <h5>Time 3:00 pm at 11th march</h5>
            </div>
            <hr />
            <div class="chat-widget-left">
                单枪匹马你别怕，一腔孤勇又如何，这一路你可以哭，但你一定不可以怂
            </div>
            <div class="chat-widget-name-left">
                <h4>  &nbsp;Polaris</h4>
                <h5>Time 7:00 am at 18th july</h5>
            </div>
            <hr />
        </div>
    </div>
</div>
  <?php if(!empty($res)): ?><div class="col-md-4 col-sm-4 col-xs-12" style="float: right;" >
        <div class="alert alert-info text-center">
            <h3> <?php echo ($res[0]['title']); ?></h3> 
            <hr />
            <i class="fa fa-warning fa-4x"></i>
           <p style="height: 167px;overflow: hidden;text-overflow: ellipsis;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($res[0]['content']); ?>
            </p>
            <hr />
            <a href="#" class="btn btn-info">点击查看完整</a> 
        </div>
      </div><?php endif; ?>
   </div>
  </div>
</div>
<section class="footer-section">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
             &copy; www.polaris.com |  <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">北极星</a> - Article from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">北极星</a></div>
      </div>
  </div>
</section>
 
  
</body>
</html>