<?php

/**
 *  Author: Feng 
 *	Web:bbs.weixiaoduo.com
 *  QQ:1666515529
 */

require './source/class/class_core.php';//引入系统核心文件

$discuz = & discuz_core::instance();//以下代码为创建及初始化对象

$discuz->cachelist = $cachelist;

$discuz->init();

$navtitle = "在线电影"; 
$metakeywords = "在线电影";


include template('app/movie');//调用单页模版文件


?>