<?php

define('SMARTY_DIR','lib/Smarty/libs/');
include(SMARTY_DIR.'Smarty.class.php');

$smarty = new Smarty();
$smarty->cache_dir = "cache";
$smarty->config_dir = "configs";
$smarty->compile_dir = "templates_c";
$smarty->template_dir = "templates";

$db['server'] = 'localhost';
$db['user'] = 'root';
$db['password'] = '123456';
$db['dbname'] = 'son_phptreinamento';

$conn = mysql_connect($db['server'], $db['user'], $db['password']);
mysql_select_db($db['dbname'], $conn);

?>