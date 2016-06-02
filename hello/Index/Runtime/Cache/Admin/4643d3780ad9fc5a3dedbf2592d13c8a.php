<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
  <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
	<title></title>
</head>
  <body>
  	<table>
  		<tr>
  			<th>ID</th>
  			<th>标题</th>
  			<th>内容</th>
  			<th>发布时间</th>
  			<th>未通过审核</th>
  		</tr>

      <?php if(is_array($userblogs)): foreach($userblogs as $key=>$v): ?><tr>
          <td><?php echo ($v["id"]); ?></td>
          <td><?php echo ($v["title"]); ?></td>
          <td><?php echo ($v["content"]); ?></td>
          <td><?php echo (date('y-m-d H:i', $v["time"])); ?></td>
          <td>
            <a href="<?php echo U('Admin/MsgManage/delete', array('id' => $v['id']));?>">删除</a>
          </td>
        </tr><?php endforeach; endif; ?>
      <tr>
        <td colspan='5' align='center'>
          <?php echo ($page); ?>
        </td>
      </tr>
  	</table>
  </body>
  </html>