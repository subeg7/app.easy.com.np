<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="./assets/images/favicon.png"></link>
<title><?php  echo $hostName[1];  ?></title>

<script language="javascript" type="text/javascript">
<?php
	if($isLogin ===TRUE){
		require ('/home/ujwal/public_html/assets/dthmlx/codebase/dhtmlx.js');
		require ('/home/ujwal/public_html/assets/dthmlx/codebase/ext/dhtmlxgrid_pgn.js');
		require ('/home/ujwal/public_html/assets/js/jquery.js');
		require ('/home/ujwal/public_html/assets/js/unicode.js');
		require ('/home/ujwal/public_html/assets/js/ucr_dhx.js');
	}
?>
</script>

<style type="text/css">
<?php
	if($isLogin ===TRUE){
		require ('/home/ujwal/public_html/assets/dthmlx/skins/web/dhtmlx.css');
		require ('/home/ujwal/public_html/assets/dthmlx/codebase/dhtmlx.css');

		require ('/home/ujwal/public_html/assets/dthmlx/codebase/ext/dhtmlxgrid_pgn_bricks.css');
		require ('/home/ujwal/public_html/assets/css/dhtmlxModify.css');
		require ('/home/ujwal/public_html/assets/css/main.css');
	}
	else{

		require ('/home/ujwal/public_html/assets/css/default.css');
	}
?>
</style>
<?php
if($isLogin ===TRUE){
		//$this->load->view('layout/ribbon_json');
		$this->load->view('layout/toolbar_xml');
	}
?>
</head>
<body>
<?php if($isLogin ===TRUE){ ?>
<div id="mainLoadidng" class="displayOff"></div>
    <header id="mainHeader">
        <div>
            <div>
                <div><img src="images/load/Home.png"/></div>
                <h1><?php echo $domainTitle;?></h1>
            </div>
            <ul id="headerMenu">
                <li title="logout">logout</li>
                <li title="settings">settings</li>
                <li title="notification">notification</li>
                <!--<li title="help">help</li>-->
            </ul>
        </div>

    </header>
<?php } ?>
