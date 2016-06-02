<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
	<title></title>
</head>
  <body>
  	<table class='table'>
  		<tr>
  			<th>ID</th>
  			<th>标题</th>
        <th>所属分类</th>
  			<th>发布时间</th>
  			<th>操作</th>

  		</tr>

      <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
          <td width='8%'><?php echo ($v["id"]); ?></td>
          <td>
            <?php echo ($v["title"]); if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><strong style='color:<?php echo ($value["color"]); ?>'>[<?php echo ($value["name"]); ?>]</strong><?php endforeach; endif; ?>
          </td>
          <td width='10%'><?php echo ($v["cate"]); ?></td>
          <td><?php echo (date('y-m-d H:i', $v["time"])); ?></td>
          <td>
            <?php if(ACTION_NAME == "index"): ?>[<a href="<?php echo U('Admin/Blog/showup', array('id' => $v['id']));?>">修改</a>]
            [<a href="<?php echo U('Admin/Blog/toTrash', array('id' => $v['id'], 'type' => 1));?>">删除</a>]
            <?php else: ?>
               [<a href="<?php echo U('Admin/Blog/toTrash', array('id' => $v['id'], 'type' => 0));?>">还原</a>]
               [<a href="<?php echo U('Admin/Blog/delete', array('id' => $v['id']));?>">彻底删除</a>]<?php endif; ?>
          </td>
        </tr><?php endforeach; endif; ?>

  	</table>
  </body>
  </html>