<?php
define('_LEGACY_PREVENT_LOAD_CORE_', true);
include '../../../mainfile.php';

$inifile = XOOPS_TRUST_PATH . '/uploads/' . urlencode(substr(XOOPS_URL, 7)) . '_admintheme_color.ini';
if ($inifile) {
	$ini = parse_ini_file($inifile);
}
is_array($ini) || ($ini = array());

$def = array(
	'color_phase' => 200,
	'color_phase2' => 0
);
$ini = array_merge($def, $ini);

header('Content-Type: text/css'); 

//色相選択（color phase）
define('_COLOR_PHASE',$ini['color_phase']); //hslaによる色相（0-360）
define('_COLOR_PHASE2',$ini['color_phase2']); //hslaによる彩度（0-360）

//基本設定
define('_ATC_BG','#b7b7b7'); 									//基本背景色
define('_ATC_COLOR','#37415C'); 								//基本文字色
define('_ATC_ACOLOR','#3F4D6B'); 								//リンク文字色
define('_ATC_AHCOLOR','#F29B09'); 							//リンク hover 文字色
define('_ATC_HEADER','#656565'); 								//ヘッダーバー背景
define('_ATC_RCOLOR','#fff');	 								//ヘッダーバー等文字色（反転）

define('_ATC_LEFT_HEAD','#c8c8c8'); 							//左カラム モジュール名 head
define('_ATC_COLUMN','#eeeeee'); 								//左カラム システム管理、中央カラム背景
define('_ATC_H3_BG','#ddd');	 								//h3 背景
define('_ATC_CONTENTS','#f5f5f5');	 							//コンテンツ内ボックス背景

define('_ATC_ODD','#f4f9ff');	 								//odd
define('_ATC_EVEN','#fff');	 									//even
define('_ATC_ACTIVE','#E6FFE6');	 							//tr.active 等の背景

define('_ATC_ALT_MENU','#e1e1e1');	 						//altsys メニューの背景

//User Agent
if( stristr( $_SERVER['HTTP_USER_AGENT'] , 'Opera' ) ) {
	$ua_type = 'Opera' ;
} else if( stristr( $_SERVER['HTTP_USER_AGENT'] , 'MSIE' ) ) {
	$ua_type = 'IE' ;
} else {
	$ua_type = 'NN' ;
}

//this site
$this_site  = htmlspecialchars( $_SERVER['SERVER_NAME'], ENT_QUOTES ) ;

?>