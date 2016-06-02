<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
<body>
	<div id='wrap'>
		<a href="<?php echo U('Admin/Rbac/addNode');?>">添加应用</a>

		<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
                 	<p>
                 		<strong><?php echo ($app["title"]); ?></strong>
                 		[<a href="<?php echo U('Admin/Rbac/addNode', array('pid' => $app['id'], 'level' => 2));?>">添加控制器</a>]
                 		</p>
                 </div><?php endforeach; endif; ?>

	</div>
</body>
</html>