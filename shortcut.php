<?php

$Shortcut = "[InternetShortcut]

URL=http://www.zhenbaren.com/

IDList=

IconFile=£¨http://www.zhenbaren.com/favicon.ico£©

IconIndex=1

[{000214A0-0000-0000-C000-000000000046}]

Prop3=19,2

";

Header("Content-type: application/octet-stream"); 

header("Content-Disposition: attachment; filename=Õò°ÍÃÅ»§Íø.url;"); 

echo $Shortcut; 

?>