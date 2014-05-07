<?php
return array(
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => SAE_MYSQL_HOST_M, // 服务器地址
    'DB_NAME'               => SAE_MYSQL_DB,          // 数据库名
    'DB_USER'               => SAE_MYSQL_USER,      // 用户名
    'DB_PWD'                => SAE_MYSQL_PASS,          // 密码
    'DB_PORT'               => SAE_MYSQL_PORT,        // 端口
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__' 			=> '/ele/Public', // 更改默认的/Public 替换规则
    )
);