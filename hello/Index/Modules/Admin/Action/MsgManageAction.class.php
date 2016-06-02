<?php

Class MsgManageAction extends CommonAction{
	
	Public function index () {
		$this->userblogs = D('BlogRelation')->getBlogs();
		import('ORG.Util.Page');
		$count = M('userblogs')->count();
		$page = new Page($count, 1);
		$limit = $page->firstRow . ',' . $page->listRows;


		$userblogs = M('userblogs')->order('time DESC')->limit($limit)->select();
		$this->userblogs = $userblogs;
		$this->page = $page->show();
	    $this->display();
	
	}

	Public function delete () {
		$id = I('id', '', 'intval');
		if (M('userblogs')->delete($id)) {
			$this->success('删除成功', U('Admin/MsgManage/index'));
		} else {
			$this->error('删除失败');
		}
	}


}
?>