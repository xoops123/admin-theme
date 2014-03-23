<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="ja" />
<title>テーマの説明書</title>
</head>
<body>
<?php

mb_language('Japanese');
ini_set('mbstring.internal_encoding', 'UTF-8');
ini_set('mbstring.http_input'  , 'pass');
ini_set('mbstring.http_output' , 'pass');
ini_set('mbstring.substitute_character', 'none');

$name = preg_replace('#[^0-9a-zA-Z_-]#', '', @$_GET['name']);
$text = @file_get_contents('../'.$_GET['name'].'/readme.txt');
if ($text) {
	echo nl2br(htmlspecialchars(mb_convert_encoding($text, 'UTF-8', 'auto'), ENT_COMPAT, 'UTF-8'));
} else {
	echo $name.' テーマには説明書は用意されていません。';
}
?>
</body>
</html>