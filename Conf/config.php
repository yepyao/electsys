<?php
//注意，请不要在这里配置SAE的数据库，配置你本地的数据库就可以了。
return array(
    //'配置项'=>'配置值'
    //debug
	'SHOW_PAGE_TRACE'=>true,
	//database
	'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'electsys',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'dog12321',          // 密码
    'DB_PORT'               => '3066',        // 端口
    'DB_PREFIX'             => 'ele_',    // 数据库表前缀
	//site config
	'TITLE'					=> '选课信息网',
	'TMPL_PARSE_STRING'  	=>array(
    	'__PUBLIC__' 			=> '/ele/Public', // 更改默认的/Public 替换规则
 	),
	'APP_FILE_CASE'			=> true,
	'URL_CASE_INSENSITIVE'	=> true,
	'URL_HTML_SUFFIX'		=> 'html',
	'SESSION_OPTIONS'=> array('name'=>'session_id','expire'=>7200),
	
	//tpl config
	'TMPL_ACTION_ERROR'		=> 'Public:redirect',
	'TMPL_ACTION_SUCCESS'	=> 'Public:redirect',
);
?>