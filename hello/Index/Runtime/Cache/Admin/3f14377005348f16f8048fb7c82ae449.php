<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="__PUBLIC__/css/login.css" />
	<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/login.js"></script>
	<title></title>
</head>

<body>
<div id="divBox">
<form action="<?php echo U('Admin/Login/login');?>" method="post" id="login">
<input type="text" id="userName" name="username"/>
<input type="password" id="psd" name="password"/>
<input type="code" value="" id="verify" name="code"/><a href="javascript:void(change_code(this));"></a>
<input type="submit" id="sub" value=""/>
<!-- 验证码 -->
<img src="<?php echo U('Admin/Login/verify');?>" id="verify_img" />
</form>
<div class="four_bj">
<p class="f_lt"></p>
<p class="f_rt"></p>
<p class="f_lb"></p>
<p class="f_rb"></p>
</div>
</div>

<!--[if IE 6]>
    <script type="text/javascript" src="__PUBLIC__/Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('form','background');
    </script>
<![endif]-->
</body>
</html>