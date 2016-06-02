<?php if (!defined('THINK_PATH')) exit();?>
       <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><ul class="popular-posts">
          <li> 
            <h5><a href="<?php echo U('/' . $v['id']);?>" target='_blank'><?php echo ($v["title"]); ?></a></h5>
             </li><?php endforeach; endif; ?>
        </ul>