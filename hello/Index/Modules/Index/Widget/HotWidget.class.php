<?php

Class HotWidget extends Widget {
	
	Public function render ($data) {
		//热门博文
		$field = array('id', 'title', 'click');
      $data['blog'] = M('blog')->field($field)->order('click DESC')->limit(4)->select();
	  return $this->renderFile('', $data);
	}
}