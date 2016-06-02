<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />


</head>
<body>
    <form action="<?php echo U('Admin/Rbac/addRoleHandle');?>" method='post'>
	<table class="table">
	     <tr>
	     	  <th clospan="2">添加角色</th>
	     	</tr>
	     	   <td align="right"><?php echo ($type); ?>名称：</td>
	     	   <td>
	     	   	   <input type="text" name='name'/>
	     	   	</td>
	     	   <tr>
	     	   	 <td align="right"><?php echo ($type); ?>描述：</td>
	     	   	 <td>
	     	   	 	  <input type="text" name='remark'/>
	     	   	 	</td>
	     	   	 </tr>
	     	   	     <td align='right'>是否开启</td>
	     	   	     <td>
	     	   	     	<input type="radio" name='status' value='<?php echo ($pid); ?>' checked='checked'/>
	     	   	     	&nbsp;开启&nbsp;
	     	   	     	<input type="radio" name='status' value='<?php echo ($level); ?>'/>&nbsp;关闭
	     	   	     </tr>
	     	   	     <tr>
	     	   	     	<td colspan="2" align="center">
	     	   	     		<input type="submit" value='保存添加'>
	     	   	     	</td>
	     	   	 </tr>
	     	   	</table>
	     	   	</form>
	     	   </body>
	     	   </html>