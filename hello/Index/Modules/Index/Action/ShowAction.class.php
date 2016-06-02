<?php

Class ShowAction extends Action {
	
	Public function index () {

	   $id = (int) $_GET['id'];
	          $field = array('title', 'time', 'content', 'cid');
       $this->blog = M('blog')->field($field)->find($id);
	         $this->display();
	}
}

?>