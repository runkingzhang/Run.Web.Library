<?php
return array(
	'TOKEN_ON'=>false,
	'APP_DEBUG'				=> false,
  	'APP_GROUP_LIST'=>'Home,Dhadmin',
  	'DEFAULT_GROUP'=>'Home',

  	'DB_TYPE' =>'PDO',
  	'DB_DSN'=> 'mysql:host=localhost;dbname=dhweb',
	'DB_HOST'               => 'localhost', // 服务器地址
	'DB_NAME'               => 'studio',          // 数据库名
	'DB_USER'               => 'root',      // 用户名
	'DB_PWD'                => '',    // 密码
	'DB_PORT'               => '3306',        // 端口
	'DB_PREFIX'             => 'studio_',    // 数据库表前缀
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
	'DEFAULT_THEME'    => 'studio',	// 默认模板主题名称
  	'TMPL_FILE_DEPR'=>'_',
	
//	'URL_MODEL'      => 4,
	'URL_PATHINFO_DEPR'=>'_',
//	'URL_ROUTER_ON'=>true,
//	'URL_CASE_INSENSITIVE' => true,
//	'URL_DISPATCH_ON'       => true,

	'DEFAULT_AJAX_RETURN'=>'JSON',
    'THINK_PLUGIN_ON'      => true,
    'TMPL_ENGINE_TYPE' => 'smarty',
	'TMPL_ENGINE_CONFIG' => array(
        'template_dir' => TMPL_PATH , //这个就是tpl目录了
        'compile_dir'  => CACHE_PATH . 'tplCompile/', //这是我自己设定的，模版编译缓存放在这个目录里
        'cache_dir'    => CACHE_PATH . 'tplCache/',   //如果需要生成页面缓存，这个也是必须的
        'left_delimiter' => '{{',
        'right_delimiter' => '}}',
        'caching' => false
        //'cache_lifetime' => 60,  //缓存时间
        //'force_compile' => true,
        //'compile_check' => true,
	),

	//日志关闭
 	'LOG_EXCEPTION_RECORD'  => false,
 	//'TMPL_EXCEPTION_FILE'   => THINK_PATH.'/Tpl/404.tpl.php',// 异常页面的模板文件
);
?>