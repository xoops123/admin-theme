<?php

if( ! defined( 'XOOPS_ROOT_PATH' ) ) exit ;
$theme_name = basename( dirname(__FILE__) ) ;
if ( file_exists(XOOPS_ROOT_PATH.'/themes/admin/language/'.$GLOBALS['xoopsConfig']['language'].'.php') ) {
 include_once XOOPS_ROOT_PATH.'/themes/admin/language/'.$GLOBALS['xoopsConfig']['language'].'.php';
}else{
 include_once XOOPS_ROOT_PATH.'/themes/admin/language/english.php';
}

?>