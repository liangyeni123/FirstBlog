<?php

Class BlogAction extends CommonAction {
	
	//博文列表
	Public function index () {
		$this->blog = D('BlogRelation')->getBlogs();
		$this->display();
       
	}

	//删除/还原到回收站
	Public function toTrash () {
		$type = (int) $_GET['type'];
		$msg = $tyle ? '删除' : '还原';
		$update = array(
			'id' => (int) $_GET['id'],
			'del' => (int) $_GET['type']
			);
		if (M('blog')->save($update)) {
	    $this->success($msg . '成功', U('Admin/Blog/index'));
         } else {
         	$this->error($msg . '失败');
         }
	}

	//回收站
	Public function trash () {
		$this->blog = D('BlogRelation')->getBlogs(1);
		$this->display('index');
			}

	Public function delete () {
		$id = (int) $_GET['id'];
		if (M('blog')->delete($id)) {
			M('blog_attr')->where(array('bid' => $id))->delete();
            $this->success('删除成功', U('Admin/Blog/trash'));
        } else {
        	$this->error('删除失败');
        }
	}

    //添加博文
	Public function blog () {
         //所属分类
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->cate = Category::unlimitedForLevel($cate);
		//博文属性
		$this->attr = M('attr')->select();
         $this->display();
	}

	Public function addBlog () {
		p($_POST);
		$data = array(
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'summary' => $_POST['summary'],
			'time' => time(),
			'cid' => (int) $_POST['cid']
			);
		if ($bid = M('blog')->add($data)) {
			if (isset($_POST['aid'])) {
	$sql = 'INSERT INTO `' . C('DB_PREFIX') . 'blog_attr` (bid, aid)VALUES';
	      foreach ($_POST['aid'] as $v) {
	      	$sql .= '(' . $bid . ',' . $v . '),';
	      }
	      $sql = rtrim($sql, ',');
	      M('blog_attr')->query($sql);
			}
			$this->success('添加成功', U('Admin/Blog/index'));
		} else {
           $this->error('添加失败');
		}
	}



}

?>