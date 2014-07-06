<?php

/**
 *  Author: Feng 
 *	Web:bbs.weixiaoduo.com
 *  QQ:529048212
 */

require './source/class/class_core.php';//引入系统核心文件

$discuz = & discuz_core::instance();//以下代码为创建及初始化对象

$discuz->cachelist = $cachelist;

$discuz->init();

$navtitle = "听音乐"; 
$metakeywords = "听音乐";


include template('app/music');//调用单页模版文件


?>