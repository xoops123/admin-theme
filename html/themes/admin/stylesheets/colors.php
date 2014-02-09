<?php
header('Content-Type: text/css'); 

//read config
if( file_exists( dirname( __FILE__ ) . '/config.php' ) ) {
	include_once( dirname( __FILE__ ) . '/config.php' ) ;
}else{
	include_once( dirname( __FILE__ ) . '/config.dist.php' ) ;
}

?>
/*============================================================================*/

/******************************************************************************/
/* colors.css */
/******************************************************************************/

body {
	color: <?php echo _ATC_COLOR ?>;
	background:<?php echo _ATC_BG ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,72%,1);
	text-shadow:1px 1px 1px rgba(255, 255, 255, 0.5);
}
a, a:visited {
	color:<?php echo _ATC_ACOLOR ?>;
}
a:hover, a:active {
	color:<?php echo _ATC_AHCOLOR ?>;
}
hr {
	background-color: #ccc;
	border: none;
	color: #ccc;
}
th {
	background:#696969;
}
th a:hover {
	color:#ff8c00;
}

.outer td , .outer th {
	border:1px solid #ccc;
}
.outer th {
	color:#dcdcdc;
	text-shadow:1px 1px 1px rgba(0, 0, 0, 0.5);
}
table.outer {
	border:1px solid #ddd;
}

.odd {
	background:<?php echo _ATC_ODD ?>;
}
.even {
	background:<?php echo _ATC_EVEN ?>;
}


input {
	border-top:1px solid #999;
	border-right:1px solid #CCC;
	border-bottom:1px solid #DDD;
	border-left:1px solid #999;
	background:url(../design/bg_data.png) top left repeat;
}
input.formButton {
	background:url(../design/bg_data.png);
	border-top:solid 1px #CCC;
	border-left:solid 1px #DDD;
	border-right:solid 1px #999;
	border-bottom:solid 1px #999;
}
button,
input[type="button"]:hover ,
input[type="reset"]:hover ,
input[type="submit"]:hover {
	background:<?php echo _ATC_RCOLOR ?>;
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
 border-color: rgba(82, 168, 236, 0.8);
 outline: 0;

 -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
}
select:focus,
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
 outline: thin dotted #333;
 outline: 5px auto -webkit-focus-ring-color;
 outline-offset: -2px;
}

#header {
	background: <?php echo _ATC_BG ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,72%,1);
}
#header_h {
	background: <?php echo _ATC_HEADER ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,40%,1);
	-moz-box-shadow: 0px 2px 7px rgba(0,0,0,0.5); /* Firefox—p */
	-webkit-box-shadow: 0px 2px 7px rgba(0,0,0,0.5); /* Safari,Chrome—p */
	box-shadow: 0px 2px 7px rgba(0,0,0,0.5); /* CSS3 */
}
#header .logo a {
	color:<?php echo _ATC_RCOLOR ?>;
}


#admincontent {
	background: <?php echo _ATC_BG ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,72%,1);
}

#left-column .head {
	border-top :1px solid #d6d6d6;
	border-top :1px solid hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,84%,1);
	border-bottom :1px solid #d6d6d6;
	border-bottom :1px solid hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,84%,1);
	background:<?php echo _ATC_LEFT_HEAD ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,76%,1);
}
#left-column .head2 {
	border-top :1px solid #d6d6d6;
	border-bottom :1px solid #d6d6d6;
	border-top :1px solid hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,84%,1);
	border-bottom :1px solid hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,84%,1);
	background:#eeeeee;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,93%,1);
  -moz-box-shadow: 0 1px 0 #777,0 -1px 0 #777; /* ボックスシャドウ */
  -webkit-box-shadow: 0 1px 0 #777,0 -1px 0 #777;
  box-shadow: 0 1px 0 #777,0 -1px 0 #777;
}
#left-column .submenu li {
	background:url(../design/menulist.png) center left no-repeat;
}

/* =============================== Center Column ===== */
#center-column {
	background:<?php echo _ATC_COLUMN ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,93%,1);
	border-radius: 3px 3px 3px 3px;
  -webkit-box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 7px rgba(0,0,0,0.3);
     -moz-box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 7px rgba(0,0,0,0.3); /* ボックスシャドウ */
          box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 7px rgba(0,0,0,0.3);
}

#footer {
	background:<?php echo _ATC_HEADER ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,40%,1);
	color:<?php echo _ATC_RCOLOR ?>;
}
#footer a {
	color:<?php echo _ATC_RCOLOR ?>;
}
#footer a:hover {
	color:<?php echo _ATC_AHCOLOR ?>;
}

.return_top {
	border-top:1px solid #eee;
	border-left:1px solid #eee;
	border-right:1px solid #ddd;
	border-bottom:1px solid #ccc;
	background:#f2f2f2 url(../icons/page_up.png) left center no-repeat;
}


#menunavi {
	background-color:#e3e3e3;
	border-top:1px solid #bebebe;
	border-left:1px solid #bebebe;
	border-right:1px solid #cccccc;
	border-bottom:1px solid #cccccc;
}
#menunavi h2 {
	color:#333366;
}
ul.submenunavi li {
	border-top:1px solid #ffffff;
	border-left:1px solid #ffffff;
	border-right:1px solid #cccccc;
	border-bottom:1px solid #cccccc;
	background:#f8f8ff;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
}

#admincontent #contentBody .adminnavi ,
.adminnavi {
	border:1px solid #EEE;
	border-bottom:1px solid #fff;
	background:<?php echo _ATC_H3_BG ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,87%,1);
	color:#696969;
}
.adminnavi a:link , 
.adminnavi a:visited {
	color:#808080;
}
.adminnavi a:hover {
	color:<?php echo _ATC_AHCOLOR ?>;
}


/* =========================== Top Tab ===== */
ul.toptab li {
	border-top:1px solid #eee;
	border-left:1px solid #eee;
	border-right:1px solid #ddd;
	border-bottom:1px solid #ccc;	
}

/* =========================== Buttons ===== */

ul.toptab li.add {
background:#f2f2f2 url(../icons/add.png) 5px center no-repeat;
}
ul.toptab li.archive {
background:#f2f2f2 url(../icons/archive.png) 5px center no-repeat;
}
ul.toptab li.addBanner {
background:#f2f2f2 url(../icons/time_add.png) 5px center no-repeat;
}
ul.toptab li.addBannerClientList {
background:#f2f2f2 url(../icons/time_user.png) 5px center no-repeat;
}
ul.toptab li.addBannerList {
background:#f2f2f2 url(../icons/timeline.png) 5px center no-repeat;
}
ul.toptab li.addBannerExpire {
background:#f2f2f2 url(../icons/time_expire.png) 5px center no-repeat;
}
ul.toptab li.addBlock {
background:#f2f2f2 url(../icons/block.png) 5px center no-repeat;
}
ul.toptab li.addBlockCustom {
background:#f2f2f2 url(../icons/block_add.png) 5px center no-repeat;
}
ul.toptab li.addBlockEdit {
background:#f2f2f2 url(../icons/block_edit.png) 5px center no-repeat;
}
ul.toptab li.addFile {
background:#f2f2f2 url(../icons/page_add.png) 5px center no-repeat;
}
ul.toptab li.addField {
background:#f2f2f2 url(../icons/add_field.png) 5px center no-repeat;
}
ul.toptab li.addFolder {
background:#f2f2f2 url(../icons/folder_add.png) 5px center no-repeat;
}
ul.toptab li.addGroup {
background:#f2f2f2 url(../icons/group_add.png) 5px center no-repeat;
}
ul.toptab li.addImage {
background:#f2f2f2 url(../icons/image_add.png) 5px center no-repeat;
}
ul.toptab li.addModule {
background:#f2f2f2 url(../icons/module_add.png) 5px center no-repeat;
}
ul.toptab li.addRank {
background:#f2f2f2 url(../icons/rank_add.png) 5px center no-repeat;
}
ul.toptab li.addUser {
background:#f2f2f2 url(../icons/user_add.png) 5px center no-repeat;
}
ul.toptab li.addSearch {
background:#f2f2f2 url(../icons/search_add.png) 5px center no-repeat;
}
ul.toptab li.addSend {
background:#f2f2f2 url(../icons/send.png) 5px center no-repeat;
}
ul.toptab li.editFile {
background:#f2f2f2 url(../icons/page_edit.png) 5px center no-repeat;
}
ul.toptab li.editFolder {
background:#f2f2f2 url(../icons/folder_edit.png) 5px center no-repeat;
}
ul.toptab li.group {
background:#f2f2f2 url(../icons/group.png) 5px center no-repeat;
}
ul.toptab li.import {
background:#f2f2f2 url(../icons/import.png) 5px center no-repeat;
}
ul.toptab li.save {
background:#f2f2f2 url(../icons/page_save.png) 5px center no-repeat;
}
ul.toptab li.templates {
background:#f2f2f2 url(../icons/templates.png) 5px center no-repeat;
}
ul.toptab li.theme {
background:#f2f2f2 url(../icons/theme.png) 5px center no-repeat;
}
ul.toptab li.view {
background:#f2f2f2 url(../icons/view.png) 5px center no-repeat;
}

/* ====================================== Module Nav ===== */
ul.modulenav a { 
	background:url(../design/bg_blocktitle.png) repeat left top; 
	border-right:1px solid #d4d4ff; 
	border-bottom:1px solid #d4d4ff; 
}
ul.modulenav a span , 
ul.modulenav .current a span { 
	color:#37415C; 
}
ul.modulenav a:hover span { 
	color:#F29B09;
}

/* ====================================== top message ===== */
.warning, .resultMsg {
	color:#770000;
	border:1px solid #cc0000;
	background:#fff8ee url(../icons/error.png) no-repeat 5px 4px;
}
.confirm, .confirmMsg {
	color:#000000;
	border:1px solid #ff6633;
	background:#fff8ee url(../icons/important.png) no-repeat 5px 4px;
}
.tips {
	color:#696969;
	background:url(../icons/cubekun.png) no-repeat 5px -7px;
}

.tips div {
	border-radius: 20px;
	-moz-border-radius: 20px;
	-webkit-border-radius: 20px;
	background: #fff;
	box-shadow: 0px 2px 7px rgba(0,0,0,0.5); /* CSS3 */
	-moz-box-shadow: 0px 2px 7px rgba(0,0,0,0.5); /* Firefox—p */
	-webkit-box-shadow: 0px 2px 7px rgba(0,0,0,0.5); /* Safari,Chrome—p */
}
.tips > div {
	background: #fff;
}
.tips > div:after , .tips > div:before{
	right: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	top:25px;
	pointer-events: none;
}
.tips > div:after {
	position: absolute;
	top:25px;
	pointer-events: none;
	border-color: rgba(255,255,255,0);
	border-right-color: #fff;
	border-width: 8px;
	margin-top: -8px;
}
.tips > div:before{
	position: absolute;
	top:25px;
	pointer-events: none;
	border-color: rgba(138, 138, 138, 0);
	border-right-color: #dcdcdc;
	border-width: 10px;
	margin-top: -10px;
}

.tips > div:nth-child(n+1) {
	border: 2px solid #a4ffbb;
}
.tips > div:nth-child(n+1):before{
	border-right-color: #a4ffbb;
}
.tips > div:nth-child(3n) {
	border: 2px solid #ffbcf1;
}
.tips > div:nth-child(3n):before{
	border-right-color: #ffbcf1;
}
.tips > div:nth-child(3n+1) {
	border: 2px solid #ffe37e;
}
.tips > div:nth-child(3n+1):before{
	border-right-color: #ffe37e;
}

.tips > div.admin_info {
	border: 2px solid #00bbff;
}
.tips > div.admin_info:before{
	border-right-color: #00bbff;
}
.error, .errorMsg {
	color:#000000;
	border:2px dotted #ff6633;
	background: #fff8ee url(../icons/error.png) no-repeat 5px 4px;
}
.resultMsg {
	color:#000000;
	border:1px solid #6B94C5;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#ebebf1 url(../icons/tick.png) no-repeat 5px 4px;
}
.sqlAdd {
	color:#009900;
	border:1px solid #00cc00;
	background:#E4E4E4 url(../icons/database_add.png) no-repeat 5px 4px;
}
.sqlDelete {
	color:#CC3300;
	border:1px solid #ff6633;
	background:#E4E4E4 url(../icons/database_delete.png) no-repeat 5px 4px;
}

.updateMsg {
	color:#009900;
	border:1px solid #00cc00;
	background:#E4E4E4 url(../icons/update.png) no-repeat 5px 4px;
}

/* ======================================= active ===== */

.active {
	background-color:<?php echo _ATC_ACTIVE ?>;
}
.active a:hover {
		color:#cc0000;
}
.inactive {
		color:#333333; 
}
/* ======================================= Ranking ===== */
.user_module_error {
	color:#ff0000;
}

.system-admin {
	border: 1px solid #8a8a8a;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: <?php echo _ATC_COLUMN ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,93%,1);
  -webkit-box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 7px rgba(0,0,0,0.3);
     -moz-box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 7px rgba(0,0,0,0.3); /* ボックスシャドウ */
          box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 7px rgba(0,0,0,0.3);
}
.system-admin:after, .system-admin:before {
	left: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}
.system-admin:after {
	position:absolute;
	top:20px;
	border-color: rgba(208, 208, 208, 0);
	border-left-color: <?php echo _ATC_COLUMN ?>;
	border-left-color:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,93%,1);
	border-width: 10px;
	margin-top: -10px;
}
.system-admin:before {
	position:absolute;
	top:20px;
	border-color: rgba(138, 138, 138, 0);
	border-left-color: #8a8a8a;
	border-width: 12px;
	margin-top: -12px;
}
.system-admin h3 {
	background:<?php echo _ATC_H3_BG ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,87%,1);
	border: 1px solid #c0c0c0;
	border-right: 1px solid #e1e1e1;
	border-bottom: 1px solid #e1e1e1;
	border-radius: 3px;
}
.system-admin  a:hover{
	background:#fafafa;
}
.system-admin h4 {
	border-bottom:1px solid #ccc;
}

.system-admin ul li {
	background: url(../design/menulist.png) no-repeat 0 1px;
}
ul.ch-menu {
	background: <?php echo _ATC_COLUMN ?>;
	border: 1px solid #8a8a8a;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
  -webkit-box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 10px rgba(0,0,0,0.3);
     -moz-box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 10px rgba(0,0,0,0.3); /* ボックスシャドウ */
          box-shadow: 0 3px 10px rgba(0,0,0,0.3),-3px -3px 10px rgba(0,0,0,0.3);
}
ul.ch-menu:after {
	right: 100%;
	top: 16px;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(208, 208, 208, 0);
	border-right-color: <?php echo _ATC_COLUMN ?>;
	border-right-color:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,93%,1);
	border-width: 5px;
	margin-top: -5px;
}


/*  for altsys and protector
----------------------------------------------- */
/*  contents background --------------- */
#admincontent #contentBody .bg4 {
	background:<?php echo _ATC_CONTENTS ?>;
}
body.altsys form.odd {
	background:<?php echo _ATC_H3_BG ?>;
	background:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,87%,1);
}
body.protector #contentBody > div ,
div.altsys_mymenu {
	border:1px solid #ccc;
	background:#e1e1e1;
	background:<?php echo _ATC_ALT_MENU ?>;
}
hr.altsys_mymenu_separator {
	background-color: <?php echo _ATC_COLUMN ?>;
	background-color:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,93%,1);
	color: <?php echo _ATC_COLUMN ?>;
	color:hsla(<?php echo _COLOR_PHASE ?>,<?php echo _COLOR_PHASE2 ?>%,93%,1);
}

body.protector dt span {
	background:#fff;
}


/*  for xupdate
----------------------------------------------- */
#xupdate div.eachstore dt a {
border: 1px solid #c2bebe;
background: -moz-linear-gradient(top, #FFF 0%, #E6E6E6);
background: -webkit-gradient(linear, left top, left bottom, from(#FFF),
 to(#E6E6E6) );
border-radius: 20px;
-moz-border-radius: 20px;
-webkit-border-radius: 20px;
color: #111;
-moz-box-shadow: inset 1px 1px 1px rgba(000, 000, 000, 0.3);
-webkit-box-shadow: inset 1px 1px 1px rgba(000, 000, 000, 0.3);
}

#xupdate div.eachstore dl dd ul li a.isactive_-1 {
	color:#2300ff;
}
#xupdate div.eachstore dl dd ul li a.isactive_1 {
	color:#959595;
}
#xupdate div.eachstore dt a:hover ,
#xupdate div.eachstore dl dd ul li a.isactive_1:hover ,
#xupdate div.eachstore dl dd ul li a.isactive_-1:hover {
	color:#ff7400;
}
#xupdate .category-list {
	border: 1px solid #c9c9c9;
	background: #dcdcdc;
}
#contentBody .pagenavi a ,
#xupdate .pagenavi a {
	background: #f7f7f7;
	border: #c8c8c8;
	border-radius: 5px;
}
#contentBody .pagenavi a:hover {
#xupdate .pagenavi a:hover {
	background: #fff;
}

/* ================ for module.css ======== */
/* Action Search */
.legacy_actionsearch_records_desc {
	color:#666666;
}
/* block list */
.legacy_blocktype_custom {
	color:#0000cc;
}
.legacy_blocksideInput{
	border:1px solid #333333;
}

/* module list */
.legacy_module_error {
	color:#ff0000;
}
.legacy_module_warning {
	color:#FF9900;
}
.legacy_module_versionMsg {
	color:#0000ff;
}

/* ===== Help ===== */
.help {
	border:3px dashed #F8B643;
}
.help h4 {
	color:#882200;
	border-left:5px solid #F8B643;
	border-bottom:1px solid #F8B643;
	background:#ffffff url(../../theme/icons/idea.png) no-repeat 8px 3px;
}
.help h5 {
	color:#882200;
	border-left:13px solid #F8B643;
}
.help h6 {
	color:#660000;
}
.help a {
	color:darkblue;
}
.help .highlight_control_menu_item {
	color:#F8B643;
}
.help .highlight_module_name {
	color:#6766A2;
}
.help .highlight_block_name {
	color:#008800;
}
.help .new {
	background:url(../../theme/icons/legacy_help_new.png) no-repeat center right;
}
.help .update {
	background:url(../../theme/icons/legacy_help_update.png) no-repeat center right;
}


