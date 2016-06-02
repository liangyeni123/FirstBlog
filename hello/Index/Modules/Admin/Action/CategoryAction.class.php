<?php

Class CategoryAction extends CommonAction {

	Public function index () {
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort ASC')->select();
		$this->cate = Category::unlimitedForlevel($cate);
		$this->display();
	}
	
	//添加分类视图
	Public function addCate () {
		$this->pid = I('pid', 0, 'intval');
	   $this->display();
	}

   //添加分类表单处理
	Public function runAddCate () {
         if (M('cate')->add($_POST)) {
	    $this->success('添加成功', U('Admin/Category/index'));
	} else {
		$this->error('添加失败');
	   }
	}

	Public function sortCate () {
		$db = M('cate');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id' => $id))->setField('sort', $sort);
		}
		$this->redirect('Admin/Category/index');
	}

	//回收站
	Public function trash () {
		$this->cate = D('CateRelation')->getCate(1);
		$this->display('index');
			}

	Public function delete () {
		$id = (int) $_GET['id'];
		if (M('cate')->delete($id)) {
            $this->success('删除成功', U('Admin/Blog/trash'));
        } else {
        	$this->error('删除失败');
        }
	}
}
?>