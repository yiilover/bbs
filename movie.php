<?php

/**
 *  Author: Feng 
 *	Web:bbs.weixiaoduo.com
 *  QQ:1666515529
 */

require './source/class/class_core.php';//����ϵͳ�����ļ�

$discuz = & discuz_core::instance();//���´���Ϊ��������ʼ������

$discuz->cachelist = $cachelist;

$discuz->init();

$navtitle = "���ߵ�Ӱ"; 
$metakeywords = "���ߵ�Ӱ";


include template('app/movie');//���õ�ҳģ���ļ�


?>