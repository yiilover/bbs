<?php

/**
 *  Author: Feng 
 *	Web:bbs.weixiaoduo.com
 *  QQ:529048212
 */

require './source/class/class_core.php';//����ϵͳ�����ļ�

$discuz = & discuz_core::instance();//���´���Ϊ��������ʼ������

$discuz->cachelist = $cachelist;

$discuz->init();

$navtitle = "��ͼ����"; 
$metakeywords = "��ͼ����";


include template('app/meitu');//���õ�ҳģ���ļ�


?>