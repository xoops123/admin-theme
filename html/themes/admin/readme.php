<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="ja" />
<title>テーマの説明書</title>
</head>
<body>

<?php
$lines = file('readme.txt');
foreach ($lines as $l) {
  print $l . "<br>\n";
}
?>

</body>
</html>