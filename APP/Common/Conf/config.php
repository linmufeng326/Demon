<?php
return array(
	//'配置项'=>'配置值'	
	//数据库连接
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'=>'127.0.0.1',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_PORT'   => 3306, // 端口
	'DB_NAME'=>'think',
	'DB_PREFIX'=>'hd_',
	'SESSION_AUTO_START' =>true,
	//不区分别大小写
	'URL_CASE_INSENSITIVE'  =>'true', 
	//伪静态设置
	'URL_HTML_SUFFIX'=>'html',
	//'SHOW_PRACE_TRCE'=>'true',
	//'SHOW_PAGE_TRACE' =>'true',
	//URL配置
	
	//权限验证设置
	'AUTH_CONFIG'=>array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'hd_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'hd_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'hd_auth_rule', //权限规则表
        'AUTH_USER' => 'hd_user'//用户信息表
    ),
	//超级管理员id,拥有全部权限,只要用户uid在这个角色组里的,就跳出认证.可以设置多个值,如array('1','2','3')
    'ADMINISTRATOR'=>array('1'),

	//扩展配置文件
	'LOAD_EXT_CONFIG' => 'power',
	//'URL_MODEL'=>2,
	/* 模板解析设置 */
	'TMPL_PARSE_STRING'     => array(
		//'./Public/upload' => SCRIPT_DIR . '/Public/upload',
		'__PUBLIC__'      => __ROOT__ . '/Public/',
		'__STATIC__'      => __ROOT__ . '/Public/bootstrap/',
		'__CSS__'      => __ROOT__ . '/Public/bootstrap/style/',
		'__JS__'      => __ROOT__ . '/Public/bootstrap/js/',
		'__IMG__'      => __ROOT__ . '/Public/bootstrap/images/',
	)
);