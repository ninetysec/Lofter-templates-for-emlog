<?php
/*
Template Name:lofter-纵
Description:仿lofter模板
Version:1.3
Author:Tavis
Author Url:http://tavis.cn
Sidebar Amount:0
ForEmlog:5.2.1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $site_title; ?></title>
<meta content="<?php echo $site_key; ?>" name="Keywords">
<meta content="<?php echo $site_description; ?>" name="Description">
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo TEMPLATE_URL; ?>jquery-1.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>lofter.js" type="text/javascript"></script>

<?php doAction('index_head'); ?>
</head>
<body class="p-homepage">
<div class="g-doc box">
	<div class="g-hd">		
			
		<?php blog_navi();?>
		
			<div class="g-hdc box">
				<div class="m-hdimg">
					<a class="hdimg img" title="<?php echo $blogname; ?>" href="<?php echo BLOG_URL; ?>" style="cursor:pointer;"><img src="<?php echo TEMPLATE_URL; ?>images/logo.jpg" alt="<?php echo $blogname; ?>"/></a>
					</a>
				</div>					
				<div class="m-about">
					<h1 class="ttl"><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>	
					<div class="text"><?php echo $bloginfo; ?></div>					
				</div>
				<span class="icn0">&nbsp;</span>
			</div>
	</div>	
</div>				
