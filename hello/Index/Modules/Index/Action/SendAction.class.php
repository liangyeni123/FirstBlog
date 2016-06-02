<?php

Class SendAction extends Action {

Public function index() {
$this->display('index');

}

Public function handle() {
$data = array(
'title' => I('title', '', 'htmlspecialchars'),
'content' => I('content', '', 'htmlspecialchars'),
'time' => time()
);

if (M('userblogs')->data($data)->add()) {
	$this->success('谢谢投稿~我已收到', 'index');
} else {
	$this->error('投稿失败啦,请重试');
}
}


}
?>