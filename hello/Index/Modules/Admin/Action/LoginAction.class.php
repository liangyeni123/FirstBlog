<?php

Class LoginAction extends Action {
	
	Public function index () {


	   $this->display();
	}

	Public function login () {
		if (!IS_POST) halt('页面不存在');
		
		if (I('code', '', 'md5') != session('verify')) {
			$this->error('验证码错误');
		}
		
		$username = I('username');
		$pwd = I('password', '', 'md5');

		$users = M('users')->where(array('username' => $username))->find();
		
		if (!$users || $users['password'] != $pwd) {
			$this->error('账号或密码错误');
		}

		$data = array(
			'id' => $users['id'],
			'logintime' => time(),
			'loginip' => get_client_ip(),
			);
		M('users')->save($data);

		session('uid', $users['id']);
		session('username', $users['username']);
		session('logintime', date('Y-m-d H:i:s', $users['logintime']));

		$this->redirect('Admin/Index/index');
	}

	Public function verify () {
		ob_clean();
		import('ORG.Util.Image');
		Image::buildImageVerify(4, 1, 'png', 48, 22);
	}
}

?>