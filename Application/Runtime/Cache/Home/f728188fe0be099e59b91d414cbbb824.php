<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>


    <!-- Bootstrap -->
    <link href="/Public/index/css/bootstrap.min.css" rel="stylesheet">
    <style>
	    .pager span {
	        background: #8FC41F;
	        color: #fff;
	        border: 1px solid #8FC41F;
	        padding: 3px 10px;
	        margin-left: 8px;
	    }
	    .pager a {
	        border: 1px solid #666666;
	        padding: 3px 10px;
	        margin-left: 8px;
	        text-decoration: none;
	        color: #333;
	        outline: none;
	    }
	</style>
  </head>
  <body>
    <a href="/Home/admin/admin"><h1 class="text-center">后台管理</h1></a>
    <div class="row">
		<div class="col-md-1 col-md-offset-1">
			<button type="button" class="btn btn-success">帖子列表</button>
		</div>
		<div class="col-md-1">
			<a href="/Home/Admin/detail"><button type="button" class="btn btn-danger">帖子回收站</button></a>
		</div>
	</div>
    <div class="row list">
    <form action="/Home/admin/update" method="post">
		<div class="col-md-10 col-md-offset-1">
		    <table class="table table-hover table-border table-bordered table-bg">
<?php if(!empty($list1)): ?><thead>
					<tr>
						<th class="text-center" width="10"></th>
						<th class="text-center" width="20">ID</th>
						<th class="text-center" width="40">昵称</th>
						<th class="text-center" width="100">标题</th>
						<th class="text-center" width="300">内容</th>
						<th class="text-center" width="40">操作</th>
					</tr>
			  	</thead>
			  	<tbody>


	<?php if(is_array($list1)): foreach($list1 as $key=>$val): ?><tr>
						<th class="text-center" width="10"><input type="checkbox" name="fid[]" value="<?php echo ($val["fid"]); ?>"></th>
						<th class="text-center"><?php echo ($val["fid"]); ?></th>
						<th class="text-center"><?php echo ($username1); ?></th>
						<th class="text-center"><?php echo ($val["title"]); ?></th>
						<th class="text-center"><?php echo ($val["content"]); ?></th>	
						<th class="text-center"><a href="/Home/Admin/doDel?fid=<?php echo ($val["fid"]); ?>">删除</a></th>	
					</tr><?php endforeach; endif; ?>


				</tbody>
			</table>
			<input type="submit" class="btn btn-warning" value="帖子恢复" /><?php endif; ?>
			<ul class="paginList pager"><?php echo ($page1); ?></ul>
		</div>
	</form>
	</div>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="/Public/index/js/bootstrap.min.js"></script>
  </body>
</html>