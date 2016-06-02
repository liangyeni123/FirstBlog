<?php

import('TagLib');
/**
* 自定义标签库
  */

Class TagLibYeni extends TagLib {

  Protected $tags = array(
  'nav' => array('attr' => 'limit,order', 'close' => 1)
  );

  Public function _nav ($attr, $content) {
      $attr = $this->parseXmlAttr($attr);
      $str = <<<str

      <?php
          \$_nav_cate = M('cate')->order("{$attr['order']}")->select();
          import('Class.Category', APP_PATH);
          \$_nav_cate = Category::unlimitedForlayer(\$_nav_cate);
          foreach (\$_nav_cate as \$_nav_cate_v) :
          extract(\$_nav_cate_v);
          \$url = U('/c_' . \$id);
       ?>
str;

          $str .= $content;
          $str .= '<?php endforeach;?>';
          return $str;
    }
	
}

?>