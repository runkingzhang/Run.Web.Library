#Dhweb

大学的时候自己在多火的时候用来搭建企业站的项目.
大学期间用这个模板帮助学习和校外企业做了很多学院网站和企业门户网站

## 介绍
*thinkphp+mysql
*MVC
*后台模板通用，前端页面定制开发
*模板配置生存一个完成的网站
*具备SEO功能
*extjs后台管理界面
*快速开发企业站（垃圾站）



简单演示，请移步[润科记 |runking blog ](http://runkeji.com/)

## 配置
###step 1:在phpmyadmin中简历数据库dhweb，执行sqldhweb.sql
###step 2:配置数据库连接和前端展现模板
dhweb\App\Conf\config.php

<code>
<?php
return array(
	'TOKEN_ON'=>false,
	'APP_DEBUG'				=> false,
  	'APP_GROUP_LIST'=>'Home,Dhadmin',
  	'DEFAULT_GROUP'=>'Home',

  	'DB_TYPE' =>'PDO',
  	'DB_DSN'=> 'mysql:host=localhost;dbname=dhweb',
	'DB_HOST'               => 'localhost', // 服务器地址
	'DB_NAME'               => 'runkeji',          // 数据库名
	'DB_USER'               => 'root',      // 用户名
	'DB_PWD'                => '',    // 密码
	'DB_PORT'               => '3306',        // 端口
	'DB_PREFIX'             => 'runkeji_',    // 数据库表前缀
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
	'DEFAULT_THEME'    => 'runkeji',	// 默认模板主题名称,对应在dhweb\App\Tpl\runkeji下面的前端模板内容
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
</code>
###step 3：将新建的网站前端demo放到dhweb\App\Tpl\runkeji，
在页面中插入对应的php语句

###step 4：在apache中配置到对应的dhweb下面，
[localhost](http://localhost/)访问前端页面，
[admin](http://localhost/denglu)访问网站后台页面，
在后台中配置对模板内容

###step 4：部署到对应的网站上面。



