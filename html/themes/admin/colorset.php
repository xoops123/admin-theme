<?php
include '../../mainfile.php';

defined('XOOPS_TRUST_PATH') || exit;

$root = XCube_Root::getSingleton();
$root->mContext->mUser->isInRole('Site.Administrator') || exit('{result:1}');

$color_phase = isset($_POST['h'])? intval($_POST['h']) : 200;
$color_phase2 = isset($_POST['s'])? intval($_POST['s']) : 0;

$ini =<<<EOD
color_phase = {$color_phase}
color_phase2 = {$color_phase2}
EOD;

file_put_contents(XOOPS_TRUST_PATH . '/uploads/' . urlencode(substr(XOOPS_URL, 7)) . '_admintheme_color.ini', $ini);

exit('{result:0}');