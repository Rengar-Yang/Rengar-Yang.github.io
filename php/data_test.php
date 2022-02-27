<?php
$link=mysql_connect ( "localhost", "root", "123456" );
if ( !$link ) die("连接MySQL服务器失败: ".mysql_error() );echo "连接MySQL服务器成功!";
mysql_close ( $link) ;
?>