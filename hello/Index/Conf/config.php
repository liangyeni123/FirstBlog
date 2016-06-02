<?php
return array(
	//开启应用分组
	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',
	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',

	//数据库连接参数
	'DB_HOST' => '127.0.0.1',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_NAME' => 'think',
	'DB_PREFIX' => 'hd_',

	//点语法默认解析
	'TMPL_VAR_IDENTIFY' => 'array',

	'TMPL_FILE_DEPR' => '_',

	'DEFAULT_FILTER' => 'htmlspecialchars',

	//'SHOW_PAGE_TRACE' => true,

	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		'/^c_(\d+)$/' => 'Index/blog/index?id=:1',
		':id\d' => 'Index//Show/index'
		)
);
?>