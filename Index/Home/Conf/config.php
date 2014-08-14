<?php
return array(
	//'配置项'=>'配置值'
	//'URL_PATHINFO_DEPR'=>'-',//修改URL的分割符为-
	'TMPL_L_DELIM'=>'<{', //修改左定界符为  原来为{   修改目的是为防止和jquery等的冲突
	'TMPL_R_DELIM'=>'}>', //修改右定界符   原来为}
	'DB_DSN'=>'mysql://root:@localhost:3306/028jiajiao',//使用dsn方式配置数据库信息
	'DB_PREFIX'=>'tp_', //表前缀
	'SHOW_PAGE_TRACE'=>true,//开启页面trace
);
?>