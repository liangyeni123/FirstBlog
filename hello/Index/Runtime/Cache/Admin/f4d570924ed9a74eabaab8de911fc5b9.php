<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后台管理首页</title>
	<link rel="stylesheet" href="__PUBLIC__/css/admin.css" />
	<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/jsized.snow.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/admin.js"></script>
<!-- 默认打开目标 -->
<base target="iframe"/>
</head>
<body>
<!-- 头部 -->
	<div id="top_box">
		<div id="top">
		</div>
		<div class="top_bar">
			<p class="adm">
				<span>管理员：</span>
				<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
				<span class="adm_people">[liangyeni]</span>
			</p>
			<p class="out">
				<span class="out_bg">&nbsp&nbsp&nbsp&nbsp</span>&nbsp
				<a href="<?php echo U('Admin/Index/logout');?>" target="_self">退出</a>
			</p>
		</div>
	</div>
<!-- 左侧菜单 -->
		<div id="left_box">
			<p class="use">常用菜单</p>
			<div class="menu_box">
				<h2>常用菜单</h2>


      <div class="nav_bg ma_auto">
      <ul>
        <Li class="on">博文管理</a></Li>
        <li><a href="<?php echo U('Admin/Blog/index');?>">列表</a></li>
        <Li><a href="<?php echo U('Admin/Blog/blog');?>">添加</a></Li>
        <Li><a href="<?php echo U('Admin/Blog/trash');?>">通过</a></Li>
      </ul>
    </div>
     
           <div class="nav_bg ma_auto">
      <ul>
        <Li class="on">用户投稿管理</a></Li>
        <li><a href="<?php echo U('Admin/MsgManage/index');?>">列表</a></li>
      </ul>
    </div>
           <div class="nav_bg ma_auto">
      <ul>
        <Li class="on">推介管理</a></Li>
        <li><a href="<?php echo U('Admin/Blog/index');?>">列表</a></li>
        <Li><a href="<?php echo U('Admin/Blog/blog');?>">添加</a></Li>
      </ul>
    </div>

      <div class="nav_bg ma_auto">
      <ul>
        <Li class="on">属性管理</a></Li>
        <li><a href="<?php echo U('Admin/Attribute/index');?>">列表</a></li>
        <Li><a href="<?php echo U('Admin/Attribute/addAttr');?>">添加</a></Li>
      </ul>
    </div>

      <div class="nav_bg ma_auto">
      <ul>
        <Li class="on">分类管理</a></Li>
        <li><a href="<?php echo U('Admin/Category/index');?>">列表</a></li>
        <Li><a href="<?php echo U('Admin/Category/addCate');?>">添加</a></Li>
      </ul>
    </div>
				
			</div>			
		</div>
		<!-- 右侧 -->
		<div id="right">
			<iframe  frameboder="0" border="0" 	scrolling="yes" name="iframe" src=""></iframe>
		</div>
	<!-- 底部 -->
	<div id="foot_box">
		<div class="foot">
			<p>[yawn] | by liangyeni © 2015. All Rights Reserved.</p>
		</div>
	</div>

</body>
</html>
<!--[if IE 6]>
    <script type="text/javascript" src="__PUBLIC__/js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.adm_pic, #left_box .pos, .span_server, .span_people', 'background');
    </script>
<![endif]-->